var div1 = document.getElementById("content");
var div2 = document.getElementById("content1");
var contentArr = new Array();
function display1() {
    var select1 = document.getElementById("select1");
    var index1 = select1.selectedIndex;
    div1.innerHTML = "";
    document.getElementById("commit").style.display ="none";
    if(index1 > 0){
        switch (index1){
            case 1: {

                //添加两个input
                var input1 = document.createElement("input");
                input1.setAttribute("id","input1");
                input1.setAttribute("type","text");
                input1.setAttribute("placeholder","Table Name");
                div1.appendChild(input1);

                var input2 = document.createElement("input");
                input2.setAttribute("id","input2");
                input2.setAttribute("type","number");
                input1.setAttribute("placeholder","Columns Numbers");
                div1.appendChild(input2);

                //如果Columns Numbers为正数则显示按钮
                input2.onchange = function () {
                    div2.innerHTML = "";
                    document.getElementById("commit").style.display ="none";
                    var colNumber = document.getElementById("input2");
                    if(colNumber.value > 0){
                        for(var i = 0;i<colNumber.value;i++){
                            var input = document.createElement("input");
                            input.setAttribute("type","text");
                            input.setAttribute("placeholder","Attribute");
                            // contentArr[i] = input.value;
                            div2.appendChild(input)
                        }
                        document.getElementById("commit").style.display = "inline";
                    }
                }
            }break;
            case 2:{
                div2.onchange = function () {
                    document.getElementById("commit").style.display = "inline";
                };
                document.getElementById("commit").onclick = function () {
                    //创建表格
                    var table = document.getElementById("table1");

                    // //显示th
                    var tr = document.createElement("tr");
                    var inputArr = div2.getElementsByTagName("input");
                    // for(var j = 0;j < inputArr.length;j ++){
                    //     // contentArr[j] = inputArr[j].value
                    //     contentArr[j] = "aaa";
                    // }
                    for(var i = 0;i<inputArr.length;i++){
                        var td = document.createElement("td");
                        td.innerHTML=inputArr[i].value;
                        // td.innerHTML = 'aaa';
                        tr.appendChild(td);
                    }
                    table.appendChild(tr);
                }
            }break;
            case 3:{

            }break;
            case 4:{

            }break;
        }
    }
}

//点击commit显示表格
function f() {
    var op = document.createElement("option");
    var select2 = document.getElementById("select2");
    var tableName = document.getElementById("input1");
    var colNumber = document.getElementById("input2");
    op.value = colNumber.value;
    op.innerHTML=tableName.value;
    op.selected = true;
    select2.appendChild(op);

    //创建表格
    var table = document.getElementById("table1");
    table.innerHTML = "";

    //显示th
    var tr1 = document.createElement("tr");
    var inputArr = document.getElementById("content1").getElementsByTagName("input");
    for(var j = 0;j < inputArr.length;j ++){
        contentArr[j] = inputArr[j].value
    }
    for(var i = 0;i<colNumber.value;i++){
        var th = document.createElement("th");
        th.innerHTML=contentArr[i];
        tr1.appendChild(th);
    }
    table.appendChild(tr1);
}
