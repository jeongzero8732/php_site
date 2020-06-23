<div id="contents">
    <div id="cont-nav">
        <div class="container">
            <nav id="Nav-Menu">
                <ul>
                    <li>
                        <a class="menubar" href="/index.php/main">메인</a>
                    </li>
                    <li>
                        <a class="menubar" href="/index.php/evaluation">강의평가</a>
                    </li>
                    <li>
                    <?php
                        if($this->session->userdata('is_login')){
                    ?>       
                        <a class="menubar" href="/index.php/auth/update">회원정보</a>
                    <?php
                        } else{
                    ?>                 
                        <a class="menubar" href="/index.php/auth/login">회원정보</a>
                        <?php }?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>