<x-app-layout>
    
        <div style="padding-left: 40%; padding-top:10%;" >
           <label style="padding-left:10%; font-size: 20px; font-weight: bold;">Add a post</label>
           <br> <br>
            <form action="{{url('upload_post')}}" method= "POST" enctype="multipart/form-data">

                @csrf

                <div>
                    <label>Description</label>
                    <input type="text" name="description">
                </div>

                <br> <br>
                
                <div>
                    <label>Upload an image</label>
                    <input type="file" name="image">
                </div>
                <br> <br>

                <div>
                    <input type="submit" name="" style="background: skyblue; cursor: pointer; padding: 10px; border-radius: 10px;">
                </div>

            </form>
        </div>
</x-app-layout>
