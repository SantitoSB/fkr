<?php
$title = 'Добро пожаловать в АИС';
$description = '';

?>

<?php require_once('header.php')?>

<section class="content" name="content">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="header-wrapper">
                    <div class="main-header">
                        <h1>Страница 2 обработки результатов</h1>
                        <div class="subheading">
                            <h6>Пожалуйста заполните форму!!!!</h6>
                        </div>
                    </div>
                </div> <!-- header-->
            </div> <!-- column -->

        </div> <!--row-->


        <div class="row">
            <div class="form">
                <div class="col-md-12">
                    <h3>Форма для заполения</h3>
                </div>
            </div>
            <form action="">


                <div class="col-md-6">

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon " id="basic-addon1"><span class="glyphicon glyphicon-pencil"></span></span>
                            <input type="text" class="form-control" placeholder="ФИО"
                                   aria-describedby="basic-addon1">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker2'>
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                                    <input type='text' placeholder="Начало периода" class="form-control"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker2'>
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                                    <input type='text' placeholder="Конец периода" class="form-control"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--End left column-->

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Выберите действие</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                        Запись
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        Чтение
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        Модификация
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> <!--right column -->

                    <div class="col-md-12">
                        <input type="button" class="btn btn-primary" value="Получить">
                    </div>
            </form>


        </div> <!--End form-->
    </div>

    <div class="container">
        <div class="row">
            .con
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table">

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Имя</th>
                                <th>Фамилия</th>
                                <th>Дата</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Максим</td>
                                <td>Барсуков</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Иван</td>
                                <td>Иванов</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Петр</td>
                                <td>Петров</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>

            </div>
        </div> <!--end table-->
    </div>
</section>



<?php include_once('footer.php'); ?>