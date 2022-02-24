<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">



</head>

<body>
    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">美金匯率</h3>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <table id="table_id" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>幣別</th>
                    <th>現價</th>
                    <th>更新日期</th>
                    <!-- <th>時間二</th>
                    <th>時間三</th> -->
                </tr>
            </thead>
            <tbody>
                <!-- <tr> -->
                <!-- <td></td> -->
                <!-- <td></td> -->
                <!-- <td></td> -->
                <!-- </tr> -->

            </tbody>
        </table>
    </div>



    <!-- 先載入 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    <!-- datatable -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <!-- 先載入 END-->
    <script>
        $(document).ready(function() {

            $.ajax({
                type: "get",
                url: "rate.php",
                dataType: 'json',
                success: function(result) {
                    // results = result;
                    // console.log('result',result);
                    
                    //抓到key值，因為資料沒有
                    resultObj = Object.keys(result);
                    console.log('resultlength',resultObj)
                    // const resultObj1 = resultObj[98];
                    // console.log('resultObj', resultObj1);

                    //全部的物件的值,裡面有Exrate及UTC
                    const resultValue = Object.values(result);
                    // console.log('exrateObj',resultValue);
                    // console.log('exrateObj',exrateObj[98].Exrate);

                    // const exrateValue = resultValue[98].Exrate;
                    // console.log('exrateValue', exrateValue);

                    // const utcValue = resultValue[98].UTC;
                    // console.log('utcValue', utcValue);

                    // console.log('result',result.length);
                    //所以如果你希望找出台幣兌換日幣的匯率，請於程式中轉換成美金後再轉換成日幣。

                    // const datastore = [];
                    // datastore [0] = resultObj[98]; //美金
                    // datastore [1] = resultObj[175]; //台幣
                    // datastore [2] = resultObj[99]; //韓幣
                    // datastore [3] = resultObj[154]; //歐元
                    // datastore [4] = resultObj[186]; //日幣
                    // datastore [5] = resultObj[91]; //澳幣
                    // datastore [6] = resultObj[176]; //港幣
                    // datastore [7] = resultObj[77]; //人民幣


                    




                    // for (let i = 0; i < resultObj.length; i++) {
                    //     $('tbody').append(`
                    //     <tr>
                    //         <td>${resultObj[i]}</td>
                    //         <td>${resultValue[i].Exrate}</td>
                    //         <td>${resultValue[i].UTC}</td>
                    //     </tr>
                    //     `);
                    // }

                    // for (let i = 0; i < datastore.length; i++) {
                    //     $('tbody').append(`
                    //     <tr>
                    //         <td>${datastore[i]}</td>
                           
                    //     </tr>
                    //     `);
                    // }

                    $('#table_id').DataTable();

                }
            });

        });
    </script>


</body>

</html>