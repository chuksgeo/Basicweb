@extends('layouts.dashboard')
    
    @section('title', 'Dashboard')
            @section('content')
            <Header class="bg-dark text-white py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>My Dashboard</h1>
                        </div>
                    </div>
                </div>
            </header>


            <div class="list-group-separator"></div>
            <div class="list-group-item">
            <div class="row-action-primary">
            <i class="mdi-file-folder"></i>
            </div>
            <div class="row-content">
            <div class="action-secondary"><i class="mdi-material-info"></i></div>
            <h4 class="list-group-item-heading">Manage Categories</h4>
            <a href="/admin/categories" class="btn btn-default btn-raised">All Categories</a>
            <a href="/admin/categories/create" class="btn btn-primary btn-raised">New Category</a>
            </div>
            </div>
            <div class="list-group-separator"></div>


            <!-- beginning f the left section -->
            <!-- <div class="py-2">
                <div class="container">
                <div class="col-lg-3 d-none d-md-block ">
                <div class="card text-center bg-dark text-white mb-3">
                    <div class="card-body">
                        <a href="http://" decoration="none">
                            <h1 class="lead">Users</h1>
                            <h4 class="display-5">
                            
                        </a>
                        
                        </h4>
                    </div>
                </div> -->




                <!-- <div class="py-2">
                <div class="container">
                <div class="col-lg-3 d-none d-md-block ">
                <div class="card text-center bg-dark text-white mb-3">
                    <div class="card-body">
                        <a href="http://" class="btn btn-primary  text-white">
                        <div class="col-lg-3 d-none d-md-block ">
                            <h1 class="lead">Users</h1>
                            <h4 class="display-5">
</div>
                             -->
                        <!-- </a>
                        
                        </h4>
                    </div>
                </div>

    <a href="" class="btn btn-primary text-white">
        <h1 class="">users</h1>
    </a> -->





<!-- 
                <div class="card text-center bg-dark text-white mb-3">
                    <div class="card-body">
                        <h1 class="lead">Categories</h1>
                        <h4 class="display-5">
                        
                        </h4>
                    </div>
                </div>
                <div class="card text-center bg-dark text-white mb-3">
                    <div class="card-body">
                        <h1 class="lead">Posts</h1>
                        <h4 class="display-5">
                        
                        </h4>
                    </div>
                </div>
                <div class="card text-center bg-dark text-white mb-3">
                    <div class="card-body">
                        <h1 class="lead">Comments</h1>
                        <h4 class="display-5">
                       
                        </h4>
                    </div>
                </div>
               
            </div> -->

            <!-- End Left Section Area of the Dashboard -->
                <!-- </div>
            </div> -->




           


        <div class="col-lg-10">
                <h1>Top Post</h1>
                <table class="table table-strip table-hover">
                    <thead class="dark">
                        <tr>
                            <th>Components</th>
                            <th>Create</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a  href="{{ route('admin.users.index') }}" class="btn btn-success" type="submit">
                                USERS
                                <br>
                                submit
                            </a></td>
                            <td>
                            <a href="/admin/posts/create" class="btn btn-primary btn-raised">Create New User</a>                      
                             </td>
                            <td>
                            <a href="{{ route('admin.users.index') }}" target="_blank">
                                <span class="btn btn-info">Preview</span>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td><a  href="{{ route('admin.posts.index') }}" class="btn btn-success" type="submit">
                                USERS
                                <br>
                                submit
                            </a></td>
                            <td>
                            <a href="/admin/posts/create" class="btn btn-primary btn-raised">Create New User</a>                      
                             </td>
                            <td>
                            <a href="{{ route('admin.users.index') }}" target="_blank">
                                <span class="btn btn-info">Preview</span>
                            </a>
                            </td>
                        </tr>
                    </tbody>
            <
                </table>
            </div>
        <!-- End of Right Section Area Of Dashboard -->
        </div>
    
    </section>



    @endsection