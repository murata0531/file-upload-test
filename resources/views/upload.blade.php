<form method="post" action="{{ route('upload_image') }}" enctype="multipart/form-data">
   @csrf
   <input type="file" name="image">
   <label for="title">タイトル</label>     
   <input id="title" type="text" name="title" requred>
   <label for="organization">組織</label>   
   <input id="organization" type="text" name="organization" required>
   <label for="organization">組織</label>
   <select id="category" name="category">
      @foreach($categories as $category)
         <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
   </select>
   <input type="submit" value="登録">
</form>