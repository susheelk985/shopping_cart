<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Products</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            background: #e2eaef;
            font-family: "Open Sans", sans-serif;
        }

        h2 {
            color: #000;
            font-size: 26px;
            font-weight: 300;
            text-align: center;
            text-transform: uppercase;
            position: relative;
            margin: 30px 0 60px;
        }

        h2::after {
            content: "";
            width: 100px;
            position: absolute;
            margin: 0 auto;
            height: 4px;
            border-radius: 1px;
            background: #7ac400;
            left: 0;
            right: 0;
            bottom: -20px;
        }

        .carousel {
            margin: 50px auto;
            padding: 0 70px;
        }

        .carousel .item {
            color: #747d89;
            min-height: 325px;
            text-align: center;
            overflow: hidden;
        }

        .carousel .thumb-wrapper {
            padding: 25px 15px;
            background: #fff;
            border-radius: 6px;
            text-align: center;
            position: relative;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
        }

        .carousel .item .img-box {
            height: 120px;
            margin-bottom: 20px;
            width: 100%;
            position: relative;
        }

        .carousel .item img {
            max-width: 100%;
            max-height: 100%;
            display: inline-block;
            position: absolute;
            bottom: 0;
            margin: 0 auto;
            left: 0;
            right: 0;
        }

        .carousel .item h4 {
            font-size: 18px;
        }

        .carousel .item h4,
        .carousel .item p,
        .carousel .item ul {
            margin-bottom: 5px;
        }

        .carousel .thumb-content .btn {
            color: #7ac400;
            font-size: 11px;
            text-transform: uppercase;
            font-weight: bold;
            background: none;
            border: 1px solid #7ac400;
            padding: 6px 14px;
            margin-top: 5px;
            line-height: 16px;
            border-radius: 20px;
        }

        .carousel .thumb-content .btn:hover,
        .carousel .thumb-content .btn:focus {
            color: #fff;
            background: #7ac400;
            box-shadow: none;
        }

        .carousel .thumb-content .btn i {
            font-size: 14px;
            font-weight: bold;
            margin-left: 5px;
        }

        .carousel .item-price {
            font-size: 13px;
            padding: 2px 0;
        }

        .carousel .item-price strike {
            opacity: 0.7;
            margin-right: 5px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            height: 44px;
            width: 40px;
            background: #7ac400;
            margin: auto 0;
            border-radius: 4px;
            opacity: 0.8;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background: #78bf00;
            opacity: 1;
        }

        .carousel-control-prev i,
        .carousel-control-next i {
            font-size: 36px;
            position: absolute;
            top: 50%;
            display: inline-block;
            margin: -19px 0 0 0;
            z-index: 5;
            left: 0;
            right: 0;
            color: #fff;
            text-shadow: none;
            font-weight: bold;
        }

        .carousel-control-prev i {
            margin-left: -2px;
        }

        .carousel-control-next i {
            margin-right: -4px;
        }

        .carousel-indicators {
            bottom: -50px;
        }

        .carousel-indicators li,
        .carousel-indicators li.active {
            width: 10px;
            height: 10px;
            margin: 4px;
            border-radius: 50%;
            border: none;
        }

        .carousel-indicators li {
            background: rgba(0, 0, 0, 0.2);
        }

        .carousel-indicators li.active {
            background: rgba(0, 0, 0, 0.6);
        }

        .carousel .wish-icon {
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 99;
            cursor: pointer;
            font-size: 16px;
            color: #abb0b8;
        }

        .carousel .wish-icon .fa-heart {
            color: #ff6161;
        }

        .star-rating li {
            padding: 0;
        }

        .star-rating i {
            font-size: 14px;
            color: #ffc000;
        }
    </style>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <br><br>
    <div class="container-xl">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-12">

                    <h2><b>{{ $category->name }}</b></h2>

                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">

                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="row">
                                    @foreach ($category->products as $product)
                                        <?php
                                        $product_name = str_split($product->name, 19);
                                        $product_name = $product_name[0] . '...';
                                        ?>

                                        <!-- Modal -->
                                        <div class="modal fade" id="productModal">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Product Details</h4>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="w-100" id="tblproductinfo">
                                                            <tbody></tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper viewdetails" data-id='{{ $product->id }}'>
                                                <div class="img-box">
                                                    <img src="{{ asset('storage/' . $product->image) }}"
                                                        class="img-fluid" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4>{{ strlen($product_name) < 19 ? $product->name : $product_name }}
                                                    </h4>
                                                    <p class="item-price"><strike>{{ $product->price }}</strike>
                                                        <b>{{ $product->special_price }}</b>
                                                    </p>

                                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach




                                </div>
                            </div>

                        </div>

                    </div>
            @endforeach

        </div>
    </div>
    </div>

    <script type='text/javascript'>
        $(document).ready(function() {

            $("body").on("click", ".viewdetails", function() {
                var pid = $(this).attr('data-id');
                //    alert(pid);

                if (pid > 0) {

                    // AJAX request
                    var url = "{{ route('products.show', [':pid']) }}";
                    url = url.replace(':pid', pid);

                    // Empty modal data
                    $('#tblproductinfo tbody').empty();

                    $.ajax({
                        url: url,
                        dataType: 'json',
                        success: function(response) {

                            // Add product details
                            $('#tblproductinfo tbody').html(response.html);

                            // Display Modal
                            $('#productModal').modal('show');
                        }
                    });
                }
            });

        });
    </script>
</body>

</html>
