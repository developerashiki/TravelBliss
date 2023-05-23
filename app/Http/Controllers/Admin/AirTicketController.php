<?php

namespace App\Http\Controllers\Admin;

use App\Models\AirTicket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AirTicketController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function airTickets()
    {
        $this->data['airTickets'] = AirTicket::latest('id')->simplePaginate(20);

        return view('admin.airticket.air_ticket', $this->data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $airTicket = AirTicket::findOrFail($id);
        $airTicket->delete();

        Toastr::success('Air Ticket successfully delete :)', 'Success');
        return redirect()->back();
    }
}
