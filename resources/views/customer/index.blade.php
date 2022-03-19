<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
</head>

<body>
    <form action="/logout" method="post">
        @csrf
        {{-- Modal --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sign Out</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are Sure ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                            href="/home">Close</button>
                        <button type="sumbit" class="btn btn-primary"> Sign Out</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Modal Add Customer-->
    <div class="modal fade" id="modalcustom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Added Data Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/cust">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label class="col-form-label">Code</label>
                            <input type="text" name="code" class="form-control" required autofocus
                                placeholder="Entry Your Customer Code">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Date</label>
                            <input type="date" name="date" class="form-control" required placeholder="Entry Date Now">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Customer Name</label>
                            <input type="text" name="customer" class="form-control" required
                                placeholder="Entry Your Customer Name">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">City</label>
                                <select class="form-select" name="city" required
                                aria-label="Default select example"
                                placeholder="Entry Your Customer City">
                                <option selected> Select City </option>
                                <option value=" Batam Center "> Batam Center </option>
                                <option value=" Batu Aji "> Batu Aji </option>
                                <option value=" Balerang "> Barerang </option>
                                <option value=" Bengkong Laut "> Bengkong Laut </option>
                                <option value=" Bengkong Lama "> Bengkon Lama </option>
                                <option value=" Nagoya "> Nagoya </option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="liveToastBtn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- navbar --}}
    @include('dashboardlayout.header')
    @include('dashboardlayout.main')
    <div class="col-md-3 col-lg-2">
        {{-- <button type="button" href="/mdlcustom" class="btn btn-sm btn-success">Tambah</button> --}}
        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalcustom">
            Create
        </button>
    </div>
    </div>
    </div>
    </div>
    @if (session()->has('success'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
           {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    </div>
    </div>
    </main>

    {{-- sidebar --}}
    @include('dashboardlayout.sidebar')
    {{-- Table --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @include('customervajra')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="/js/dashboard.js"></script>

    <script>
        var toastTrigger = document.getElementById('liveToastBtn')
        var toastLiveExample = document.getElementById('liveToast')
        if (toastTrigger) {
            toastTrigger.addEventListener('click', function() {
                var toast = new bootstrap.Toast(toastLiveExample)
    
                toast.show()
            })
        }
      </script>
</body>

</html>
