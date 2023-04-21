<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Database search page</title>
    </head>

<!--    <script>-->
<!--        var _hmt = _hmt || [];-->
<!--        (function() {-->
<!--            var hm = document.createElement("script");-->
<!--            hm.src = "https://hm.baidu.com/hm.js??b405f35328a33a0be7b3dba9c6c57c5c";-->
<!--            var s = document.getElementsByTagName("script")[0];-->
<!--            s.parentNode.insertBefore(hm, s);-->
<!--        })();-->
<!--    </script>-->

    <script>
        function prime_search_test()
        {
            var a=document.form_first.key1.value;
            var reg=/^\s* \s*$/;
            if(reg.test(a))
            {
                alert("please insert relative information");
                return false;
            }
            else{
                a=RegExp.$1;
                document.form_first.submit();
            }
            var a=document.form_first.key2.value;
            var reg=/^\s* \s*$/;
            if(reg.test(a))
            {
                alert("please insert relative information");
                return false;
            }
            else{
                a=RegExp.$1;
                document.form_first.submit();
            }
            var a=document.form_first.key3.value;
            var reg=/^\s* \s*$/;
            if(reg.test(a))
            {
                alert("please insert relative information");
                return false;
            }
            else{
                a=RegExp.$1;
                document.form_first.submit();
            }
            var a=document.form_first.key4.value;
            var reg=/^\s* \s*$/;
            if(reg.test(a))
            {
                alert("please insert relative information");
                return false;
            }
            else{
                a=RegExp.$1;
                document.form_first.submit();
            }
            var a=document.form_first.key5.value;
            var reg=/^\s* \s*$/;
            if(reg.test(a))
            {
                alert("please insert relative information");
                return false;
            }
            else{
                a=RegExp.$1;
                document.form_first.submit();
            }
        }
    </script>

    <body style="background-color:white;">
    <div style="
            background-color: #f1f1f1;
            text-align: center;
            padding: 20px;
            ">
        <img src = 'photo/img1.jpg' alt = "asc" width = "80px" height = "80px"></img>
    </div>

    <div style="
            max-width: 700px;
            margin: 30px auto;
            padding: 15px;
            line-height: 1.7;
            ">
        <h1 style="text-align: center;
                ">Database search page</h1>
        <hr>
    </div>

    <div id="main" style="margin-top:40px; text-align: center;">
        <form name="form_first" action="search_result.php" id="main_search" method="post">
            <label for="prime_search_one"></label><input id="prime_search_one" type="text" name="key1" class="input_text" autofocus="autofocus" placeholder="Arbitrary keyword"><br>
            <label for="prime_search_one"></label><input id="prime_search_one" type="text" name="key2" class="input_text" autofocus="autofocus" placeholder="Genus"><br>
            <label for="prime_search_one"></label><input id="prime_search_one" type="text" name="key3" class="input_text" autofocus="autofocus" placeholder="VirusName"><br>
            <label for="prime_search_one"></label><input id="prime_search_one" type="text" name="key4" class="input_text" autofocus="autofocus" placeholder="VirusDescription"><br>
            <label for="prime_search_one"></label><input id="prime_search_one" type="text" name="key5" class="input_text" autofocus="autofocus" placeholder="Selected_5'UTR"><br>
            <input id="prime_search_two" type="button" value="Search" onclick="prime_search_test()">
        </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>



<!--    <script>-->
<!--        function changeForm(val)-->
<!--        {-->
<!--            var select=new Array();-->
<!--            if(val=='All')-->
<!--            {-->
<!--                searchScope2.style.display="none";-->
<!--                prime_search_one.placeholder="Please select a type and enter your keyword";-->
<!--            }else if(val=='human')-->
<!--            {-->
<!--                select=['Chromosome Position(hg19)','Chromosome Position(hg38)','Gene Symbol','Gene ID','IRES ID','Transcript ID','Protein Name','Protein ID','ID in circBase','ID in circRNADb','Organism'];-->
<!--                create_option(select);-->
<!--                prime_search_one.placeholder="chr2:45,602,066-45,611,294";-->
<!--            }else if(val=='viral')-->
<!--            {-->
<!--                select=['Organism','IRES ID','Transcript ID'];-->
<!--                create_option(select);-->
<!--                prime_search_one.placeholder="Human betaherpesvirus 5 (HHV-5; HCMV)";-->
<!--            }else if(val=='other')-->
<!--            {-->
<!--                select=['Gene Symbol','Organism','IRES ID','Transcript ID'];-->
<!--                create_option(select);-->
<!--                prime_search_one.placeholder="ELH";-->
<!--            }-->
<!--        }-->
<!--        function create_option(select)-->
<!--        {-->
<!--            searchScope2.style.display="inline";-->
<!--            searchScope2.innerHTML = "";-->
<!--            for (i=0;i<select.length;i++)-->
<!--            {-->
<!--                var option=document.createElement('option');-->
<!--                option.setAttribute('value',select[i]);-->
<!--                searchScope2.appendChild(option);-->
<!--                option.textContent=select[i];-->
<!--            }-->
<!--        }-->
<!--        function changeForm2(val)-->
<!--        {-->
<!--            if(searchScope1.value=='human')-->
<!--            {-->
<!--                if(val=='Gene Symbol'){-->
<!--                    prime_search_one.placeholder="SRBD1";-->
<!--                }else if(val=='Gene ID'){-->
<!--                    prime_search_one.placeholder="55133";-->
<!--                }else if(val=='IRES ID'){-->
<!--                    prime_search_one.placeholder="hsa_ires_00000.1";-->
<!--                }else if(val=='Transcript ID'){-->
<!--                    prime_search_one.placeholder="NM_018079.4";-->
<!--                }else if(val=='Protein Name'){-->
<!--                    prime_search_one.placeholder="S1 RNA-binding domain-containing protein 1";-->
<!--                }else if(val=='Protein ID'){-->
<!--                    prime_search_one.placeholder="NP_060549.4";-->
<!--                }else if(val=='ID in circBase'){-->
<!--                    prime_search_one.placeholder="hsa_circ_0054431";-->
<!--                }else if(val=='ID in circRNADb'){-->
<!--                    prime_search_one.placeholder="hsa_circ_08475";-->
<!--                }else if(val=='Chromosome Position(hg19)'){-->
<!--                    prime_search_one.placeholder="chr2:45,602,066-45,611,294";-->
<!--                }else if(val=='Chromosome Position(hg38)'){-->
<!--                    prime_search_one.placeholder="chr2:45,829,205-45,838,433";-->
<!--                }-->
<!--            }else if(searchScope1.value=='viral'){-->
<!--                if(val=='Organism'){-->
<!--                    prime_search_one.placeholder="Human betaherpesvirus 5 (HHV-5; HCMV)";-->
<!--                }else if(val=='IRES ID'){-->
<!--                    prime_search_one.placeholder="vir_ires_00298.1";-->
<!--                }else if(val=='Transcript ID'){-->
<!--                    prime_search_one.placeholder="NC_006273.2";-->
<!--                }-->
<!--            }else if(searchScope1.value=='other'){-->
<!--                if(val=='Gene Symbol'){-->
<!--                    prime_search_one.placeholder="ELH";-->
<!--                }else if(val=='Organism'){-->
<!--                    prime_search_one.placeholder="Aplysia californica (California sea hare)";-->
<!--                }else if(val=='IRES ID'){-->
<!--                    prime_search_one.placeholder="aca_ires_00000.1";-->
<!--                }else if(val=='Transcript ID'){-->
<!--                    prime_search_one.placeholder="NM_001204741";-->
<!--                }-->
<!--            }-->
<!--        }-->
<!--    </script>-->

    <div style="
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px;
            ">
        <p style="font-family:cursive;color:black;font-size10px;">数据库链接<br></p>
        <a href="http://reprod.njmu.edu.cn/cgi-bin/iresbase/index.php" target="_blank">IRESbase<br> </a>
    </div>
    </body>
</html>
