@extends('layout/navbar')



@section('search')
   
    <body>
       
        <div class="container">
        <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading">
        <div>
        <a href="{{route('admin.home.home')}}">Home</a>
        </div>
        <h3>User Search</h3>
        </div>
        
        <div class="panel-body">

        <div class="form-group">

        <input type="text" class="form-controller" id="search" name="LOWER(search)" value="">


        </div>

        <table class="table table-bordered table-hover" padding-top="40%">

        <thead>

        <tr>

        <th>ID</th>

        <th>Name</th>

        <th>User Name</th>

        <th>Type</th>

        <th>Email</th>

        <th>Gender</th>

        <th>Address</th>

        </tr>

        </thead>

        <tbody id='tbody'>

        </tbody>

        </table>

        </div>

        </div>

        </div>

        </div>
        

        <script type="text/javascript">
            const search = document.getElementById('search');
            const tableBody = document.getElementById('tbody');
            function getContent(){
            
            const searchValue = search.value;
            
                const xhr = new XMLHttpRequest();
                xhr.open('GET','{{route('search')}}/?search=' + searchValue ,true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function() {
                    
                    if(xhr.readyState == 4 && xhr.status == 200)
                    {
                        tableBody.innerHTML = xhr.responseText;
                    }
                }
                xhr.send()
            }
            search.addEventListener('input',getContent);
        </script>
        
         

    </body>

@endsection