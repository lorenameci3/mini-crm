<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        return Lead::all();
    }

    public function store(Request $request)
    {
        // Krijo një lead të ri
    }

    public function show($id)
    {
        return Lead::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $lead = Lead::findOrFail($id);
        // Përditëso lead-in
    }

    public function destroy($id)
    {
        $lead = Lead::findOrFail($id);
        $lead->delete();
    }
}

