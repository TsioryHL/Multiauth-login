
<x-guest-layout >
    <body style="background: rgb(2, 1, 11); margin:100px auto;" >

        <div class="font-sans text-gray-900 antialiased">


        <section class="From my-4 mx-5">
            <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <img src="https://cdn.pixabay.com/photo/2014/05/02/21/47/laptop-336369_1280.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-7 px-5 pt-4">

                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <!-- Email Address -->
                                    <div class="form-row">
                                        <div class="col-lg-7">
                                            <input type="email" id="email" name="email"  class="form-control my-2 p-2" placeholder="Email address">
                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="form-row">
                                        <div class="col-lg-7">
                                            <input type="password" id="password" name="password" class="form-control my-2 p-2" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-7">
                                            <button type="submit" class="btn1">Login</button>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
            </div>
        </section>

    <div class="lign"></div>
</div>
</body>
</x-guest-layout>
