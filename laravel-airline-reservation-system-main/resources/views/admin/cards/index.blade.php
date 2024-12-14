@extends('layouts.master')
@section('title')
  @lang('Card')
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card">
    <div class="card-header">
        <h2>Ajouter une carte bancaire</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('cards.store') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <!-- Numéro de la carte -->
                <div class="col-md-6">
                    <label for="cardNumber" class="form-label">Numéro de la carte</label>
                    <input type="text" class="form-control" id="cardNumber" name="card_number" placeholder="1234 5678 9012 3456" required>
                </div>
            
                <!-- Nom sur la carte -->
                <div class="col-md-6">
                    <label for="cardName" class="form-label">Nom sur la carte</label>
                    <input type="text" class="form-control" id="cardName" name="card_name" placeholder="Votre nom" required>
                </div>
            </div>

            <!-- Date d'expiration -->
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="expiryDate" class="form-label">Date d'expiration</label>
                        <input type="text" class="form-control" id="expiryDate" name="expiry_date" placeholder="MM/AA" required>
                    </div>
                </div>
                <!-- CVV -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cvv" name="cvv" placeholder="123" required>
                    </div>
                </div>
            </div>
            <!-- Type de carte -->
            <div class="mb-3">
                <label for="cardType" class="form-label">Type de carte</label>
                <select class="form-select" id="cardType" name="card_type" required>
                    <option value="Visa">Visa</option>
                    <option value="MasterCard">MasterCard</option>
                    <option value="Amex">American Express</option>
                </select>
            </div>

            

            <!-- Adresse de facturation -->
            <div class="mb-3">
                <label for="billingAddress" class="form-label">Adresse de facturation</label>
                <input type="text" class="form-control" id="billingAddress" name="billing_address" placeholder="Votre adresse" required>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="billingCity" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="billingCity" name="billing_city" placeholder="Ville" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="billingZip" class="form-label">Code postal</label>
                        <input type="text" class="form-control" id="billingZip" name="billing_zip" placeholder="Code postal" required>
                    </div>
                </div>
            </div>

            <!-- Sauvegarde de la carte -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="saveCard" name="save_card" value="1">
                <label class="form-check-label" for="saveCard">Sauvegarder cette carte pour les futurs paiements</label>
            </div>
            

            <!-- Soumettre le formulaire -->
            <button type="submit" class="btn btn-primary">Ajouter la carte</button>
        </form>
    </div>
</div>
@endsection