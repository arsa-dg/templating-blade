@extends("adminlte/master")

@section("content")

    <h2>ini create</h2>

@endsection

@push("scripts")

    <script>
        var items = ["tes", "tes2"];
        console.log("tesconsole", items);
    </script>

@endpush