<div id="cont-cont">
    <div class="ss-cont">
        <section class="select-container" style="display: inline-flex; ">
            <form id="bd_search" method="post">
                <input
                    type="text"
                    name="search_word"
                    id="q"
                    class="form-control2"
                    onkeypress="board_search_enter(document.q);"
                    placeholder="강의명을 입력하세요"/>
                <input type="button" value="검색" class="btn-lec1" id="search_btn"/>

            </form>
           
                <?php 
				if($this->session->userdata('is_login')){
			?>
            <a class="btn-lec2" href="/index.php/evaluation/insert" style="margin-left:5px;">등록하기</a>
            <?php } ?>
        </section>
    </div>
</div>
<!-- card -->

<div class="container">
<div>
    <form method="post" action="<?=$_SERVER['REQUEST_URI']?>">
        <input type="hidden" name="sort" value="asec">
        <input type="submit" value="글번호 정렬">
    </form>
</div>
    <table class="table table-striped table-hover">
        <thead>
            <th>글번호</th>
            <th>강의명</th>
            <th>교수명</th>
            <th>작성자</th>
        </thead>
        <?php
    if($results==true){
    foreach($results as $data)
    {?>
        <tr
            tr="tr" style="cursor:pointer; " onmouseover=" window.status='' "
            onmouseout=" window.status = '' "
            onclick=" location.href='/index.php/evaluation/show/<?=$data->evalutionID?>' ">
            <td><?=$data->evalutionID?></td>
            <td><?=$data->lectureName?></td>
            <td><?=$data->professorName?></td>
            <td><?=$data->writer?></td>
        </tr>
        <?php } }?>

    </table>
    <div class="text-center">
        <ul class="pagination">

            <?php echo $links; ?>
        </li>
    </ul>
</div>
</div>
</div>
<!-- contents -->