<?php

require_once('models/Publisher.php');

class PublishersController extends Controller
{

    public function index()
    {
        return view(
            'publishers/index',
            [
                'publishers' => Publisher::all(),
                'title' => 'Publishers List'
            ]
        );
    }

    public function show($id)
    {
        $publisher = Publisher::find($id);
        return view(
            'publishers/show',
            [
                'publisher' => $publisher,
                'title' => 'Publisher Detail'
            ]
        );
    }
}
?>