function create_day(){
 var html = '<form class="forms-sample form_add_day"  action="{{action(\'PackageController@store\')}}"  method="post" style="margin-top: 2rem;" enctype="multipart/form-data">'+
                '<input type="hidden" value="" class="id_package" name="id_package" id="id_package" />'+
                '<div class="form-group" style="margin-top:1rem;">'+
                    '<label for="exampleInputEmail1">Title</label>'+
                    '<input type="text" class="form-control title_package"   name="title" style="border: 1px solid #bfbfbf;" />'+
                '</div>'+
                '<div class="form-group">'+
                    '<label for="exampleInputPassword1" rows="4" cols="50">Description</label>'+
                    '<textarea class="col-md-12 description_package"  name="description"  rows="7" style="border-radius: 2px;"></textarea>'+
                '</div>'+
                '<div class="form-group">'+
                    '<label for="exampleInputEmail1">Image</label>'+
                    '<div class="form-group">'+
                        '<div class="file-loading">'+
                            '<input  type="file"  name="image" class="file image_add_day" data-overwrite-initial="false" data-min-file-count="2">'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</form>';
$('#block_add_day').append(html);
$(".image_add_day").fileinput({
    uploadUrl: "{{url('images/')}}",
    uploadAsync: false,
    overwriteInitial: false,
    initialPreviewAsData: true, 
    initialPreviewFileType: 'image', 
    purifyHtml: true,
    allowedFileExtensions: ['jpg', 'png', 'gif', 'svg'],
}).on('filesorted', function(e, params) {
    console.log('File sorted params', params);
}).on('fileuploaded', function(e, params) {
    console.log('File uploaded params', params);
});
}

function add_packages(url){
    var days = [];
//          var form_data = new FormData();
          var form_package = new FormData();
        
    $("#block_add_day .form_add_day").each(function(){
        console.log($(this).find('.id_package').val());
        days.push({
            id:$(this).find('.id_package').val(),
            title: $(this).find('.title_package').val(),
            description:  $(this).find('.description_package').val(),
            image: $(this).find('.image_add_day').prop('files')[0]
        });
//        form_data.append('id', $(this).find('.id_package').val());
//        form_data.append('title', $(this).find('.title_package').val());
//        form_data.append('description', $(this).find('.description_package').val());
//        form_data.append('image', $(this).find('.image_add_day').prop('files')[0]);
        console.log($(this).find('.image_add_day').prop('files')[0]);
        console.log($(this).find('.description_package').val());  
    });
//    console.log(days);
//    var data = {
//        title: $('#title_package').val(),
//        description: $('#description_package').val(),
//        price: $('#price_package').val(),
//        id:$('#id_package').val(),
//        days: JSON.stringify(days)
//    };
form_package.append('title',$('#title_package').val());
form_package.append('description',$('#description_package').val());
form_package.append('price',$('#price_package').val());
form_package.append('id',$('#id_package').val());
form_package.append('days',JSON.stringify(days));
    $.ajax({
        headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
        type: "post",
        url: url,
        cache: false,
        contentType: false,
        processData: false,
//        async: false,
        dataType: "json",
        data: form_package
   }).done(function (data) {
       clear_package();
       console.log(data);
       
   });
}

function clear_package(){
    $('#block_add_day').html("");
     var html = '<form class="forms-sample form_add_day"  action="{{action(\'PackageController@store\')}}"  method="post" style="margin-top: 2rem;">'+
                '<div class="form-group" style="margin-top:1rem;">'+
                    '<label for="exampleInputEmail1">Title</label>'+
                    '<input type="text" class="form-control title_package"   name="title" style="border: 1px solid #bfbfbf;" />'+
                '</div>'+
                '<div class="form-group">'+
                    '<label for="exampleInputPassword1" rows="4" cols="50">Description</label>'+
                    '<textarea class="col-md-12 description_package"  name="description"  rows="7" style="border-radius: 2px;"></textarea>'+
                '</div>'+
                '<div class="form-group">'+
                    '<label for="exampleInputEmail1">Image</label>'+
                    '<div class="form-group">'+
                        '<div class="file-loading">'+
                            '<input  type="file"  name="image" class="file image_add_day" data-overwrite-initial="false" data-min-file-count="2">'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</form>';
$('#block_add_day').html(html);
$('#title_package').val('');
$('#description_package').val('');
$('#price_package').val('');
}


