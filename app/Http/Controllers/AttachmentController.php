<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttachmentController extends Controller
{
    public function destroy($id)
    {
        //$post->delete();
        //$user = Attachment::where('id', $id)->firstorfail()->delete();
        DB::delete('DELETE FROM attachments WHERE id = ?', [$id]);
        echo ("attachment Record deleted successfully.");
        return redirect()->route('tickets.index');
    }

    public function deleteProduct(Request $request)
    {
        //dd($request->all());
        Attachment::find($request->product_id)->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }
}
