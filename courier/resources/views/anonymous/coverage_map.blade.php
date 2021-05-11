@extends('layouts.app')

@section('content')
    <section class="pricing py-4">
        <div class="container">
            <h2 class="page-title text-center">Coverage Map</h2>
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
            <br>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>District</th>
                    <th>Police Station</th>
                    <th>Area</th>
                    <th>Charge(1kg)</th>
                    <th>Charge(2kg)</th>
                    <th>Charge(3kg)</th>
                    <th>Charge(4kg)</th>
                    <th>Charge(5kg)</th>
                </tr>
                </thead>
                <tbody id="myTable">
                <tr>
                    <td>Dhaka</td>
                    <td>Badda</td>
                    <td>Badda</td>
                    <td>50</td>
                    <td>75</td>
                    <td>90</td>
                    <td>105</td>
                    <td>120</td>
                </tr>
                <tr>
                    <td>Rajshahi</td>
                    <td>Badda</td>
                    <td>Badda</td>
                    <td>50</td>
                    <td>75</td>
                    <td>90</td>
                    <td>105</td>
                    <td>120</td>
                </tr>

                </tbody>
            </table>
        </div>
    </section>

    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
