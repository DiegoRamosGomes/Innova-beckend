<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Http\Resources\ContactResource;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request): ContactResource
    {
        $data = $request->validated();

        $contact = Contact::updateOrCreate($data);

        return new ContactResource($contact);
    }

    public function show(Contact $contact): ContactResource
    {
        return new ContactResource($contact);
    }

    public function update(UpdateContactRequest $request, Contact $contact): ContactResource
    {
        $data = $request->validated();

        $contact->update($data);

        return new ContactResource($contact);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
    }
}
