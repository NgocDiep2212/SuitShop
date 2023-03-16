function deleteCategory(id){
    var option = confirm('Bạn có chắc chắn muốn xóa không?');
    if(!option) return;
    $.post('../../common/ajax.php',{
        'id': id,
        'action': 'deleteCategory',
    },function(data){
        location.reload()
    })
}
function deleteProduct(id){
    var option = confirm('Bạn có chắc chắn muốn xóa không?');
    if(!option) return;
    $.post('../../common/ajax.php',{
        'id': id,
        'action': 'deleteProduct',
    },function(data){
        location.reload()
    })
}
function deleteUser(id){
    var option = confirm('Bạn có chắc chắn muốn xóa không?');
    if(!option) return;
    $.post('../../common/ajax.php',{
        'id': id,
        'action': 'deleteUser',
    },function(data){
        location.reload()
    })
}
function exituser(){
var option = confirm('Bạn có chắc chắn muốn đăng xuất không?');
    if(!option) return;
    $.post('../../common/ajax.php',{
        'action': 'exit'
    },function(data){
        location.href = "../user/login.php";
    })
}