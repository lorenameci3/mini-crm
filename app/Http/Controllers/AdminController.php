<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Lead;
use App\Models\Account;
use App\Models\Deal;
use App\Models\Contact;

class AdminController extends Controller
{
    public function login(Request $request) {
        $submit = $request['submit'];
        //passwordv12345678
        if($submit == "submit"){
            $request->validate([
                'email'=>'required',
                'password'=>'required',
            ]);
            if(\Auth::attempt($request->only('email', 'password'))){
                return redirect('/home');
            }else{
                return redirect('login')->withError('Incorrect Username or Password');
            }
        }
        return view('login');
    }

    public function dashboard() 
    {
        return view('dashboard');
    }
    public function logout() 
    {
        \Session::flush();
        \Auth::logout();
        return redirect('/login');
    }

    public function add_lead(Request $request)
    {        
        // dd($request);
        $submit = $request['submit'];
        // dd($submit);
        if($submit == "submit"){
            $request->validate([
                'firstname'=>'required',
                'lastname' => 'required',
                'title' => 'required',
                'company' => 'required',
                'phone'=>'required|min:10',
            ]);
            $lead = new Lead;
            $lead->firstname = $request['firstname'];
            $lead->lastname = $request['lastname'];
            $lead->firstname = $request['firstname'];
            $lead->title = $request['title'];
            $lead->company = $request['company'];
            $lead->phone = $request['phone'];
            $lead->email = $request['email'];
            $lead->source = $request['source'];
            $lead->status = $request['status'];
            $lead->street = $request['street'];
            $lead->city = $request['city'];
            $lead->state = $request['state'];
            $lead->zip = $request['zip'];
            $lead->description = $request['description'];
            $lead->save();

            return redirect('/leads/manage-leads');
        }
        // dd(11);
        return view('leads/add_lead');

    }

    public function manage_leads()
    {
        $data['leads'] = Lead::all();

        return view('leads/manage_leads')->with($data);
    }

    public function delete_lead($id)
    {
        $lead = Lead::find($id);
        if($lead == ""){
            return redirect('leads/manage-leads');
        }else{
            $lead->delete();
            return redirect('leads/manage-leads');
        }
    }
    
    public function edit_lead($id, Request $request)
    {
        $lead = Lead::find($id);
        if($lead == ""){
            return redirect('leads/manage-leads');
        }

        $submit = $request['submit'];
        if($submit == "submit"){
            $request->validate([
                'firstname'=>'required',
                'lastname' => 'required',
                'title' => 'required',
                'company' => 'required',
                'phone'=>'required|min:10',
            ]);
            $lead->firstname = $request['firstname'];
            $lead->lastname = $request['lastname'];
            $lead->firstname = $request['firstname'];
            $lead->title = $request['title'];
            $lead->company = $request['company'];
            $lead->phone = $request['phone'];
            $lead->email = $request['email'];
            $lead->source = $request['source'];
            $lead->status = $request['status'];
            $lead->street = $request['street'];
            $lead->city = $request['city'];
            $lead->state = $request['state'];
            $lead->zip = $request['zip'];
            $lead->description = $request['description'];
            $lead->save();

            return redirect('/leads/manage-leads');
        }
        $data['lead_details'] = $lead;
        return view('leads/edit_lead')->with($data);
    }

    public function view_lead($id)
    {
        $lead = Lead::find($id);
        if($lead == ""){
            return redirect('leads/manage-leads');
        }
        
        $data['lead_details'] = $lead;
        return view('leads/view_lead')->with($data);    
    }

    public function convert_lead($id, Request $request)
    {
        $lead = Lead::find($id);
        if($lead == ""){
            return redirect('leads/manage-leads');
        }
        // dd($request);
        $submit = $request['submit'];
        // dd($submit);
        // dd($submit);
        if($submit == "submit"){
            $request->validate([
                'deal_name' => 'required',
                'closing_date' => 'required',
                'deal_stage' => 'required',
            ]);

            //create account
            $account = new Account;
            $account->account_name = $lead->company;
            $account->phone = $lead->phone;
            $account->save();

            $account_id = $account->id;

            //create contact
            $contact = new Contact;
            $contact->contact_name = $lead->firstname.''.$lead->lastname;
            $contact->account_id = $account->id;
            $contact->email = $lead->email;
            $contact->phone = $lead->phone;

            $contact->save();

            $contact_id = $contact->id;

            //create deal
            $deal = new Deal;
            $deal->amount = $request['amount'];
            $deal->deal_name = $request['deal_name'];
            $deal->closing_date = $request['closing_date'];
            $deal->deal_stage = $request['deal_stage'];
            $deal->account_id = $account->id;
            $deal->contact_id = $account->id;
            $deal->save();

            //delete of old lead
            $lead->delete();
            return redirect('deals/manage-deals');

        } 
        $data['lead_details'] = $lead;
        return view('leads/convert_lead')->with($data);   
    }

    public function manage_accounts()
    {
        $data['accounts'] = Account::all();

        return view('accounts/manage_accounts')->with($data);
    }
    public function manage_contacts()
    {
        $data['contacts'] = Contact::with('getAccountDetail')->get();

        return view('contacts/manage_contacts')->with($data);
    }
    public function manage_deals()
    {
        $data['deals'] = Deal::with('getAccountDetail')->with('getContactDetail')->get();

        return view('deals/manage_deals')->with($data);
    }

    public function add_account(Request $request)
    {        
        $submit = $request['submit'];
        if($submit == "submit"){
            $request->validate([
                'account_name'=>'required',
                'phone'=>'required|min:10',
            ]);

            //create account
            $account = new Account;
            $account->account_name = $request['account_name'];
            $account->phone = $request['phone'];
            $account->website = $request['website'];
            $account->save();

            return redirect('/accounts/manage-accounts');
        }
        return view('accounts/add_account');

    }
    public function edit_account($id, Request $request)
    {
        $account = Account::find($id);
        if($account == ""){
            return redirect('/accounts/manage-accounts');
        }

        $submit = $request['submit'];
        if($submit == "submit"){
            $request->validate([
                'account_name'=>'required',
                'phone'=>'required|min:10',
            ]);

            $account->account_name = $request['account_name'];
            $account->phone = $request['phone'];
            $account->website = $request['website'];
            $account->save();

            return redirect('/accounts/manage-accounts');
        }
        $data['account_details'] = $account;
        return view('accounts/edit_account')->with($data);
    }
    
    public function delete_account($id)
    {
        $account = Account::find($id);
        if($account == ""){
            return redirect('/accounts/manage-accounts');
        }else {
            $account->delete();
            return redirect('/accounts/manage-accounts');
        }
    }

    public function add_contact(Request $request)
    {        
        $submit = $request['submit'];
        if($submit == "submit"){
            $request->validate([
                'account_name'=>'required',
                'phone'=>'required|min:10',
            ]);

            //create account
            $account = new Account;
            $account->account_name = $request['account_name'];
            $account->phone = $request['phone'];
            $account->website = $request['website'];
            $account->save();

            return redirect('/accounts/manage-contacts');
        }
        return view('accounts/add_contact');

    }
}
