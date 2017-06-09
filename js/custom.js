/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
'use strict';

var _count=0;//selected product count
var itemList=[];

    function AddToCart(id,name,price){
        //header count show
        _count +=1;
        $('#cart').text(_count);
        
        //Making list
        var row="";
        row="<tr>"
               +"<td>"+ name +"</td>"
               +"<td>"+ price +"</td>"
               +"<td>" + "<button type=\"button\" onclick=\"removeItem(this,"+id+")\" class=\"btn btn-warning btn-xs\">"
               +"<span class=\"glyphicon glyphicon-remove\"></span>"
               +"</button></td>"
               +"</tr>";
       
       $('#cartListTable > tbody:last').append(row);
       itemList.push(id);
       console.log(itemList);
    }
    
    function removeItem(obj,id)
    {
        //header count show
        _count -=1;
        $('#cart').text(_count);
        
        //Making list
        //itemList=removeAarrayItem(itemList, id);
        $(obj).closest('tr').remove();
        
        var index = itemList.indexOf(id);
        itemList.splice(index, 1);
        
        console.log(itemList);
    }
    
    
