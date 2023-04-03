<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Generate Barcode In Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">



            <h1 class="text-danger pt-4 text-center mb-4"><b>List of Documents</b></h1>
            <hr>
            <div class="pb-2">
                <a href="/create" class="btn btn-success">Add Document</a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Document Type</th>
                        <th scope="col">Title</th>
                        <th scope="col">Sender</th>
                        <th scope="col">Office</th>
                        <th scope="col">Document Code</th>
                        <th scope="col">Description</th>
                        <th scope="col">Options</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($documents as $document)

                    <tr>
                        <th>{{ $document->id }}</th>
                        <td>{{ $document->document_type }}</td>
                        <td>{{ $document->title }}</td>
                        <td>{{ $document->sender }}</td>
                        <td>{{ $document->office }}</td>
                        <td>{!! DNS2D::getBarcodeHTML("$document->document_code",'QRCODE',5,5) !!}
                            p-{{$document->document_code}}
                        </td>
                        <td>{{ $document->description }}</td>
                        <td>
                            <a href="{{ url('/documents/' . $document->id) }}" title="View Document"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/documents/' . $document->id . '/edit') }}" title="Print Document"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Print</button></a>
                            <a href="{{ url('/documents/' . $document->id) }}" title="Receive"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Receive</button></a>
                        </td>
                        <td>temp</td>
                    </tr>

                    @endforeach

                </tbody>
            </table>


        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>