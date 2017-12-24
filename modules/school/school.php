<div id="main-content-wp">
    <div class="wp-inner clearfix">
        <div class="section fl-left" id="add-wp">
            <div class="section-head">
                <h3 class="section-title">Thêm học sinh</h3>
            </div>
            <div class="section-detail">
                <form method="POST">
                    <div class="wrap-item clearfix">
                        <label for="fullname" class="label fl-left">Họ và tên</label>
                        <input type="text" name="fullname" id="fullname" class="fl-right">
                    </div>
                    <div class="wrap-item clearfix">
                        <label for="email" class="label fl-left">Email</label>
                        <input type="email" name="email" id="email" class="fl-right">
                    </div>
                    <div class="wrap-item clearfix">
                        <label class="label fl-left">Lớp học</label>
                        <select name="select_class" class="fl-right">
                            <option value="0">----- Chọn lớp học ------</option>
                            <option value="1">Khối 10</option>
                            <option value="4">--- Lớp 10A</option>
                            <option value="5">--- Lớp 10B</option>
                            <option value="6">--- Lớp 10C</option>
                            <option value="2">Khối 11</option>
                            <option value="7">--- Lớp 11A</option>
                            <option value="8">--- Lớp 11B</option>
                            <option value="9">--- Lớp 11C</option>
                        </select>
                    </div>
                    <div class="wrap-item clearfix">
                        <input type="submit" name="sm_reg_student" id="sm_reg_student" value="Thêm mới" class="fl-right">
                    </div>
                </form>
            </div>
        </div>
        <div class="section fl-right" id="list-student-wp">
            <div class="section-head">
                <h3 class="section-title">Danh sách học sinh</h3>
            </div>
            <div class="section-detail">
                <div class="section" id="action-wp">
                    <div class="fl-right">
                        <form method="GET" name="form-filter" id="form-filter" action="">
                            <input type="hidden" name="mod" value="student">
                            <input type="hidden" name="view" value="add">
                            <select name="class_id">
                                <option value="0">Chọc lọc theo lớp</option>
                                <option  value="1">Khối 10</option>
                                <option  value="4">--- Lớp 10A</option>
                                <option  value="5">--- Lớp 10B</option>
                                <option  value="6">--- Lớp 10C</option>
                                <option  value="2">Khối 11</option>
                                <option  value="7">--- Lớp 11A</option>
                                <option  value="8">--- Lớp 11B</option>
                                <option  value="9">--- Lớp 11C</option>
                            </select>
                            <input type="text" name="q" id="q" placeholder="Nhập từ khóa" value="">
                            <input type="submit" name="sm_filter" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <form method="POST" action="">
                        <table class="table list-table-wp">
                            <thead>
                            <tr>
                                <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                <td><span class="thead-text">STT</span></td>
                                <td><span class="thead-text">Họ và tên</span></td>
                                <td><span class="thead-text">Lớp học</span></td>
                                <td><span class="thead-text">Thời gian</span></td>
                                <td><span class="thead-text">Thao tác</span></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="checkbox" name="checkItem[]" class="checkItem" value="1"></td>
                                <td><span class="tbody-text">1</span></td>
                                <td><span class="tbody-text">Xuân Trường</span></td>
                                <td><span class="tbody-text">Lớp 10A</span></td>
                                <td><span class="tbody-text">03/04/2017 - 10:34:42</span></td>
                                <td>
                                    <ul class="action clearfix">
                                        <li><a href="#" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="checkItem[]" class="checkItem" value="2"></td>
                                <td><span class="tbody-text">2</span></td>
                                <td><span class="tbody-text">Minh Hải</span></td>
                                <td><span class="tbody-text">Lớp 10B</span></td>
                                <td><span class="tbody-text">03/04/2017 - 10:35:08</span></td>
                                <td>
                                    <ul class="action clearfix">
                                        <li><a href="#" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="checkItem[]" class="checkItem" value="3"></td>
                                <td><span class="tbody-text">3</span></td>
                                <td><span class="tbody-text">Cao Sơn</span></td>
                                <td><span class="tbody-text">Lớp 10B</span></td>
                                <td><span class="tbody-text">03/04/2017 - 10:35:25</span></td>
                                <td>
                                    <ul class="action clearfix">
                                        <li><a href="#" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                <td><span class="thead-text">STT</span></td>
                                <td><span class="thead-text">Họ và tên</span></td>
                                <td><span class="thead-text">Lớp học</span></td>
                                <td><span class="thead-text">Thời gian</span></td>
                                <td><span class="thead-text">Thao tác</span></td>
                            </tr>
                            </tfoot>
                        </table>
                        <button type="submit" name="sm_delete_multi" id="sm_delete_multi">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>
                        <span class="desc">Click checkbox để xóa một hoặc nhiều trường</span>
                    </form>
                </div>
                <div class="section" id="pagination-wp">
                    <div class="wp-inner">
                        <div class="section-detail">
                            <ul class='list-item'>
                                <li>
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>