<x-app-layout>
    <x-guest-layout>
        <div class="container-fluid" style="margin-top: 15px">
            <div class="container" style="">


                        <div class="card " style="box-shadow: 4px 4px 15px rgb(40, 39, 39); border-radius: 5px">
                            <div class="card-header" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="float-md-start">
                                            <h4 class="">Listes des utilisateurs</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="" style="">
                                            <button width="500px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                                                <i class="bi bi-person-plus"></i> Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="background: rgb(255, 255, 255)">

                                                    <!-- Validation Errors -->
                                                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                                                    <form class="form-group"method="get" action="{{ route('register') }}">
                                                        @csrf

                                                        <!-- Name -->
                                                        <div class="form-group">
                                                            <label for="name" style="color: black">Name</label>
                                                            <input id="name" class="form-control" type="text" name="name"  required autofocus >
                                                        </div>

                                                        <!-- Email Address -->
                                                        <div class="form-group">
                                                            <label for="email" style="color: black">Email</label>
                                                            <input id="email" class="form-control" type="email" name="email" required >
                                                        </div>

                                                        <!-- Password -->
                                                        <div class="form-group">
                                                            <label for="password" style="color: black">Password</label>
                                                            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" >
                                                        </div>

                                                        <!-- Confirm Password -->
                                                        <div class="form-group">
                                                            <label for="password_confirmation" style="color: black">Confirm password</label>
                                                            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required >
                                                        </div>

                                                        <!-- Select Option Rol type -->
                                                        <div class="form-group">
                                                            <label for="role_id" style="color: black">Register as</label>
                                                            <select name="role_id" class="form-control">
                                                                <option value="user">User</option>
                                                                <option value="manager">Manager</option>
                                                            </select>
                                                        </div>

                                                        <div class="flex items-center justify-end mt-4">

                                                          <button class="btn btn-outline-primary">
                                                                Register
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>



                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover" style="">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr class="">
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td></td>
                                                    <td><a class="btn btn-outline-primary" href="#"><i class="bi bi-eye"></i> Voir</a></td>
                                                    <td><a href="#" class="btn btn-outline-warning"><i class="bi bi-pen"></i> Modifier</a></td>
                                                    <td>
                                                        <form action="#" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-outline-danger" type="submit"><i class="bi bi-trash"></i> Supprimer</button>
                                                        </form>
                                                    </td>
                                                </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer"></div>
                        </div>



            </div>
        </div>
        <!--script-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </x-guest-layout>
</x-app-layout>
