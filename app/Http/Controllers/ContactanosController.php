<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactanosRequest;
use App\Http\Requests\UpdateContactanosRequest;
use App\Mail\ContactanosMailable;
use App\Models\Contactanos;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;


class ContactanosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = auth()->user();

        $email = $user->email ?? '';
        $nombre = $user->name ?? '';

        return view('contactanos.index', compact('email', 'nombre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactanosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactanosRequest $request)
    {

        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret' => env('reCAPTCHA_secret'),
                'response' => $request->input('g-recaptcha-response')
            ]
        )->object();

        if ($response->success && $response->score > 0.7) {

            //return $request->input('g-recaptcha-response');
    
            Mail::to('daniel.gonzalez.garcia@iesdonana.org')->send(new ContactanosMailable($request->validated()));
    
    
            return Redirect()->route('libros')->with('success', 'Mensaje enviado correctamente.');

        }

        return Redirect()->back()->with('error', 'No ha pasado la verificación reCaptcha.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contactanos  $contactanos
     * @return \Illuminate\Http\Response
     */
    public function show(Contactanos $contactanos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contactanos  $contactanos
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactanos $contactanos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactanosRequest  $request
     * @param  \App\Models\Contactanos  $contactanos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactanosRequest $request, Contactanos $contactanos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contactanos  $contactanos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contactanos $contactanos)
    {
        //
    }
}
