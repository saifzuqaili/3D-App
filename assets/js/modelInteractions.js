function frontView()
{
    document.getElementById('model__Front_Cam').setAttribute('bind', 'true');
}

function leftView()
{
    document.getElementById('model__Left_Cam').setAttribute('bind', 'true');
}

function rightView()
{
    document.getElementById('model__Right_Cam').setAttribute('bind', 'true');
}

function backView()
{
    document.getElementById('model__Back_Cam').setAttribute('bind', 'true');
}

function sideView()
{
    document.getElementById('model__Side_Cam').setAttribute('bind', 'true');
}

function homepage()
{
    location.href = "../../index.php";
}

function stopAnimate()
{
	var status = false;
	document.getElementById('model___5_Coca-Cola_can-TIMER').setAttribute('enabled', status.toString());
}

function startAnimate()
{
	var status = true;
	document.getElementById('model___5_Coca-Cola_can-TIMER').setAttribute('enabled', status.toString());
}
