function deleteCategory(id){
    var option = confirm('Bạn có chắc chắn muốn xóa danh mục này không?');
    if(!option) return;
    $.post('/project-php/mvc/view/admin/common/ajax.php',{
        'id': id,
        'action': 'deleteCategory',
    },function(data){
        location.reload()
    })
}
function deleteProduct(id){
    var option = confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');
    if(!option) return;
    $.post('./common/ajax.php',{
        'id': id,
        'action': 'deleteProduct',
    },function(data){
        location.reload()
    })
}
function deleteUser(id){
    var option = confirm('Bạn có chắc chắn muốn xóa người dùng này không?');
    if(!option) return;
    $.post('./common/ajax.php',{
        'id': id,
        'action': 'deleteUser',
    },function(data){
        location.reload()
    })
}
function deleteCustomer(id){
    var option = confirm('Bạn có chắc chắn muốn xóa đơn hàng này không?');
    if(!option) return;
    $.post('./common/ajax.php',{
        'id': id,
        'action': 'deleteCustomer',
    },function(data){
        location.reload()
    })
}
