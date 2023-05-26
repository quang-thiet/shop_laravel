<table class="table">
    <header>
        <tr>
          <th class="datatable-cell" style="flex-grow:1"><span>Name</span></th>
          <th class="datatable-cell" style="width: 15%"><span>image</span></th>
          <th class="datatable-cell" style="width: 20%"><span>Email</span></th>
          <th class="datatable-cell" style="width: 20%"><span>Role</span></th>
            <th class="datatable-cell text-right" style="width: 15%"><span>Tùy chọn</span></th>  
        </tr>
    </header>
    @foreach ( as $user)
        
   
    <body>
        <tr>
            <td>{{$user->name}}</td>
            <td><img src="{{asset('/image/users/'.$user->avatar)}}" alt="" style="width:50%;object-fit:cover;display:block;margin:0 auto;aspect-ratio:1/1"></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td class="datatable-cell text-right" style="width: 15%">
              <a href="{{ route('user.edit', $user->id) }}"
                  class="btn btn-icon btn-success btn-sm mr-2"><i
                      class="fas fa-edit"></i></a>
              <a href="{{ route('delete.user', $user->id) }}"
                  class="btn btn-icon btn-danger btn-sm mr-2"><i
                      class="far fa-trash-alt"></i></a>
          </td>
        </tr>
    </body>
    @endforeach
</table>