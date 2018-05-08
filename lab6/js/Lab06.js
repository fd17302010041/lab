var divObj = document.getElementsByTagName("div")[0];
var div1=document.createElement("div");
var div2=document.createElement("div");
var div3=document.createElement("div");
var div4=document.createElement("div");
div1.setAttribute("class","item");
div2.setAttribute("class","item");
div3.setAttribute("class","item");
div4.setAttribute("class","item");
divObj.appendChild(div1);
divObj.appendChild(div2);
divObj.appendChild(div3);
divObj.appendChild(div4);
for (var i = 1;i <=4;i ++){
    var divArr =[div1,div2,div3,div4];
    const data = countries[i - 1];

    var h2 = document.createElement("h2");
    var node1 = document.createTextNode(data.name);
    h2.appendChild(node1);
    divArr[i - 1].appendChild(h2);

    var h3 = document.createElement("h3");
    var node2 = document.createTextNode(data.continent);
    h3.appendChild(node2);
    divArr[i - 1].appendChild(h3);

    var ul1 = document.createElement("ul");
    ul1.setAttribute("class","inner-box");
    var innerH2 = document.createElement("h2");
    var node3 = document.createTextNode("Cities");
    innerH2.appendChild(node3);
    ul1.appendChild(innerH2);
    for (var j = 0;j < data.cities.length; j ++){
        var para=document.createElement("p");
        var node=document.createTextNode(data.cities[j]);
        para.appendChild(node);
        ul1.appendChild(para);
    }
    divArr[i - 1].appendChild(ul1);

    var ul2 = document.createElement("ul");
    ul2.setAttribute("class","inner-box");
    var innerH21 = document.createElement("h2");
    var node4 = document.createTextNode("Popular Photos");
    innerH21.appendChild(node4);
    ul2.appendChild(innerH21);
    divArr[i - 1].appendChild(ul2);
    for (var a = 0; a < data.photos.length;a ++){
        var src = "images/" + data.photos[a];
        var img = document.createElement("img");
        img.setAttribute("src",src);
        img.setAttribute("class","photo");
        ul2.appendChild(img);
    }

    var button = document.createElement("button");
    divArr[i - 1].appendChild(button);
}
