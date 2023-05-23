<?php

namespace App\Http\Controllers\Admin;

use App\Models\RailTicket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class IndianRailTicketController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function indianRailwayTickets()
    {
        $this->data['railticktes'] = RailTicket::latest('id')->simplePaginate(20);

        return view('admin.railticket.rail_ticket', $this->data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $railTicket = RailTicket::findOrFail($id);
        $railTicket->delete();

        Toastr::success('Rail Ticket successfully delete :)', 'Success');
        return redirect()->back();
    }
}
