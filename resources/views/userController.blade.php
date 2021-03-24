<x-app-layout>
    <x-guest-layout>
        <div class="container-fluid" style="margin-top: 15px">
            <div class="container" style="">


                        <div class="card " style="box-shadow: 4px 4px 15px rgb(40, 39, 39); border-radius: 5px">
                            <div class="card-header" style=" background:rgb(106, 4, 4); color:white">
                                <h5 style="">Listes des utilisateurs
                                <a style="margin-left: 500px" class="btn btn-success" href="#">Register</a>
                                </h5>
                            </div>
                            <div class="card-body">
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
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td></td>
                                                <td><a class="btn btn-primary" href="#">Voir</a></td>
                                                <td><a href="#">Modifier</a></td>
                                                <td><form action="#" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                                </form>
                                            </td>
                                            </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer"></div>
                        </div>



            </div>
        </div>
    </x-guest-layout>
</x-app-layout>
