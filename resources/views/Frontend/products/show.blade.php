<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <button class="btn btn-warning m-auto d-block mt-5 mb-5 " style="font-size: 20px">Product Details Information</button>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive mt-3">
                <table class="table table-border custom-table-css table-border table-hover table-dark table-striped">
                    <tbody class="">
                        <tr class="table-danger fw-bold">
                            <th>Section</th>
                            <td>Details</td>
                        </tr>
                        <tr>
                            <th scope="row">Name:</th>
                            <td>{{$products->name}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Category :</th>
                            <td>{{$products->category_name}}</td>
                        </tr>

                        <tr>
                            <th scope="row"> Brand Name :</th>
                            <td>{{$products->brand_name}}</td>
                        </tr>

                        <tr>
                            <th scope="row">Description :</th>
                            <td>{{$products->description}}</td>
                        </tr>

                        <tr>
                            <th scope="row">Image :</th>
                            <td><img src="{{asset($products->image)}}"style="width: 120px; alt=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>

</body>
</html>
