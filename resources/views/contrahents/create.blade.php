@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <form action="{{ route('contrahents.store') }}" method="POST">
            @csrf            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputName">Imię</label>
                <input type="text" class="form-control" name="name" id="inputName" placeholder="Imię">
              </div>
              <div class="form-group col-md-6">
                <label for="inputSurname">Nazwisko</label>
                <input type="text" class="form-control" name="surname" id="inputSurname" placeholder="Nazwisko">
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inpurPrice">Stawka</label>
                  <input type="number" class="form-control" name="price" id="inputPrice" placeholder="Stawka">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputSalary">Pensja</label>
                  <input type="number" class="form-control" name="salary" id="inputSalary" placeholder="Pensja">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inpurPrice">Adres</label>
                  <textarea class="form-control" name="address" id="inputAddress" rows="3"></textarea>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputSalary">Notatki</label>
                  <textarea class="form-control" name="notes" id="inputNotes" rows="3"></textarea>

                </div>
              </div>
            <button type="submit" class="btn center btn-primary">Dodaj</button>
          </form>

    </div>
@endsection
