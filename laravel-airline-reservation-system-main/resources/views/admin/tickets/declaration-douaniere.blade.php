@extends('layouts.master')

@section('title')
  @lang('translation.flight.flight')
@endsection

@section('css')
  <!-- DataTables -->
  <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
  <style>
        .content h2 {
            color: #2c3e50;
        }

        .content p {
            font-size: 16px;
            line-height: 1.5;
        }

        .content ul {
            list-style: none;
            padding: 0;
        }

        .content ul li {
            background-color: #ecf0f1;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
        }
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .content {
            margin: 50px auto;
            max-width: 800px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .faq h3 {
            color: #2c3e50;
        }

        .faq p {
            margin-bottom: 10px;
            font-size: 16px;
            line-height: 1.5;
        }


        .form-container form {
            display: flex;
            flex-direction: column;
        }
        .form-container input,
        .form-container select,
        .form-container textarea {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        .form-container button {
            padding: 10px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #3498db;
        }
        .faq {
            margin: 50px auto;
            max-width: 800px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container {
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
  </style>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
    <h2>Déclaration Douanière au Maroc</h2>
    </div>
    <div class="card-body">
    <p>Voici quelques informations importantes concernant les déclarations douanières pour le Maroc :</p>
    <ul>
        <li><strong>Articles Interdits :</strong> Les armes, les drogues, les produits explosifs, et autres articles illégaux sont strictement interdits.</li>
        <li><strong>Franchises Douanières :</strong> Les voyageurs peuvent apporter une quantité limitée de produits sans payer de droits de douane, tels que 200 cigarettes, 1 litre de spiritueux, et 2 litres de vin.</li>
        <li><strong>Objets de Valeur :</strong> Les articles de valeur tels que l'or, les bijoux, et les appareils électroniques doivent être déclarés à l'arrivée et au départ pour éviter des frais supplémentaires.</li>
        <li><strong>Animaux et Plantes :</strong> Les animaux, les plantes et les produits dérivés sont soumis à des restrictions et nécessitent des certificats spécifiques.</li>
        <li><strong>Devise :</strong> La déclaration de devise est obligatoire pour toute somme excédant 100 000 MAD à l'entrée et à la sortie du territoire.</li>
    </ul>
    <p>Pour plus d'informations, veuillez consulter le <a href="https://www.douane.gov.ma" target="_blank">site officiel de l'Administration des Douanes et Impôts Indirects du Maroc</a>.</p>
    </div>
</div>
 <!-- FAQ Section -->
 <div class="card">
    <div class="card-header">
        <h3>FAQ - Questions Fréquemment Posées</h3>
    </div>
    <div class="card-body">
        <p><strong>Q: Quels articles dois-je déclarer à la douane?</strong><br>
        R: Tous les articles de valeur et les biens soumis à restrictions doivent être déclarés.</p>
        <p><strong>Q: Puis-je importer des médicaments au Maroc?</strong><br>
        R: Les médicaments à usage personnel sont autorisés en quantité raisonnable. Les médicaments prescrits nécessitent une ordonnance.</p>
        <p><strong>Q: Y a-t-il des restrictions sur l'importation de nourriture?</strong><br>
        R: Oui, l'importation de certains produits alimentaires peut être restreinte ou interdite.</p>
    </div>
</div>
    <!-- Formulaire de Déclaration Douanière -->
    <div class="card form-container">
        <div class="card-header">
        <h3>Formulaire de Déclaration Douanière</h3>
        </div>
        <div class="card-body">
                <form action="{{ url('/submit-declaration') }}" method="POST">
                    @csrf
                    <input type="text" name="nom" placeholder="Nom Complet" required>
                    <input type="text" name="passport" placeholder="Numéro de Passeport" required>
                    <textarea name="declaration" rows="5" placeholder="Détails de la Déclaration" required></textarea>
                    <button type="submit">Soumettre la Déclaration</button>
                </form>
        </div>
    </div>
    </div>
@endsection

@section('script')
  <!-- Required datatable js -->
  <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
  {{-- bootstrap-datepicker --}}
  <script src="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>


  {{-- datatable init --}}
  <script type="text/javascript">
    let table;

    //datepicker Init
    $("#datepicker").datepicker();

    function dateChanged() {
      table.draw();
    }

    function reset() {
      $('.filter-input').val('').trigger('change')
      table.draw();
    }

    $(function() {
      table = $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        lengthChange: true,
        lengthMenu: [10, 20, 50, 100],
        pageLength: 10,
        scrollX: true,
        order: [
          [0, "desc"]
        ],
        // text transalations
        language: {
          search: "@lang('translation.search')",
          lengthMenu: "@lang('translation.lengthMenu1') _MENU_ @lang('translation.lengthMenu2')",
          processing: "@lang('translation.processing')",
          info: "@lang('translation.infoShowing') _START_ @lang('translation.infoTo') _END_ @lang('translation.infoOf') _TOTAL_ @lang('translation.infoEntries')",
          emptyTable: "@lang('translation.emptyTable')",
          paginate: {
            "first": "@lang('translation.paginateFirst')",
            "last": "@lang('translation.paginateLast')",
            "next": "@lang('translation.paginateNext')",
            "previous": "@lang('translation.paginatePrevious')"
          },
        },
        ajax: {
          url: "{{ route('tickets.flights') }}",
          method: "GET",
          data: function(d) {
            d.origin = $("#origin").find(":selected").val()
            d.destination = $("#destination").find(":selected").val();
            d.airline = $("#airline").find(":selected").val();
            d.departure = $("#departure").val();
            d.arrival = $("#arrival").val();
          }
        },
        columnDefs: [{
          className: "text-center",
          targets: 5
        }],
        columns: [{
            data: 'id'
          },
          {
            data: 'flight_info',
            name: "destination.name"
          },
          {
            data: 'route',
            searchable: false
          },
          {
            data: 'time',
            searchable: false
          },
          {
            data: 'capacity',
            searchable: false
          },
          {
            data: 'action',
            orderable: false,
            searchable: false
          },
        ],
      })

      // select dropdown for change the page length
      $('.dataTables_length select').addClass('form-select form-select-sm');

      // add margin top to the pagination and info 
      $('.dataTables_info, .dataTables_paginate').addClass('mt-3');
    });
  </script>

  <script>
    $(document).on('click', '.book-btn', function(e) {
      e.preventDefault();
      const id = $(this).data('id');
      // send ajax request to the server
      $.ajax({
        url: "{{ route('tickets.book') }}",
        method: "POST",
        data: {
          _token: "{{ csrf_token() }}",
          flight_id: id,
          seats: 1
        },
        success: function(data) {
          Swal.fire({
            timer: "1000",
            text: "{{ __('messages.booking_success') }}",
            icon: "success"
          })
          $('#datatable').DataTable().ajax.reload();
        },
        error: function(data) {
          if (data.responseJSON.status === 500) {
            Swal.fire({
              timer: "20000",
              title: data.responseJSON.message,
              text: data.responseJSON.errors,
              customClass: "swal-error",
              icon: "error",
            })
          }

          Swal.fire({
            timer: "2000",
            text: data.responseJSON.message,
            icon: "warning",
          });
        }

      })
    })
  </script>
@endsection
