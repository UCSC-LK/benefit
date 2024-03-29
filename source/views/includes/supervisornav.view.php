<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>hrnav.css">

    <title>Handle Reimbursements</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

<input type="checkbox" id="check">
<label for="check">
    <i class="fas fa-bars" id="sidebar_btn"></i>
</label>

<div class="side_bar" id="mySide">
    <center>
        <img scr="<?= IMG_PATH ?>profile/Chathura.jpeg" class="profile_image" atl="">
        <h4><?= Auth::getfirst_name() ?></h4>
    </center>
    <a href="<?= PATH ?>Supervisor"><i class="fas fa-coins"></i><span>Handle Reimbursements</span></a>
    <a href="<?= PATH ?>LeaveapproveController"><i class="fas fa-calendar-week"></i></i>
        <span>Handle Time Offs</span></a>
    <a href="<?= PATH ?>Supervisor/Performance"><i class="fas fa-edit"></i><span>Handle Performance</span></a>
    <a href="<?= PATH ?>Markattendance"><i class="fas fa-user-check"></i><span>Attendance</span></a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
    ;(function(){function t(){}function e(t){return null==t?t===l?d:y:I&&I in Object(t)?n(t):r(t)}function n(t){var e=$.call(t,I),n=t[I];try{t[I]=l;var r=true}catch(t){}var o=_.call(t);return r&&(e?t[I]=n:delete t[I]),o}function r(t){return _.call(t)}function o(t,e,n){function r(e){var n=d,r=g;return d=g=l,x=e,v=t.apply(r,n)}function o(t){return x=t,O=setTimeout(c,e),T?r(t):v}function i(t){var n=t-h,r=t-x,o=e-n;return w?k(o,j-r):o}function f(t){var n=t-h,r=t-x;return h===l||n>=e||n<0||w&&r>=j}function c(){
        var t=D();return f(t)?p(t):(O=setTimeout(c,i(t)),l)}function p(t){return O=l,S&&d?r(t):(d=g=l,v)}function s(){O!==l&&clearTimeout(O),x=0,d=h=g=O=l}function y(){return O===l?v:p(D())}function m(){var t=D(),n=f(t);if(d=arguments,g=this,h=t,n){if(O===l)return o(h);if(w)return O=setTimeout(c,e),r(h)}return O===l&&(O=setTimeout(c,e)),v}var d,g,j,v,O,h,x=0,T=false,w=false,S=true;if(typeof t!="function")throw new TypeError(b);return e=a(e)||0,u(n)&&(T=!!n.leading,w="maxWait"in n,j=w?M(a(n.maxWait)||0,e):j,S="trailing"in n?!!n.trailing:S),
        m.cancel=s,m.flush=y,m}function i(t,e,n){var r=true,i=true;if(typeof t!="function")throw new TypeError(b);return u(n)&&(r="leading"in n?!!n.leading:r,i="trailing"in n?!!n.trailing:i),o(t,e,{leading:r,maxWait:e,trailing:i})}function u(t){var e=typeof t;return null!=t&&("object"==e||"function"==e)}function f(t){return null!=t&&typeof t=="object"}function c(t){return typeof t=="symbol"||f(t)&&e(t)==m}function a(t){if(typeof t=="number")return t;if(c(t))return s;if(u(t)){var e=typeof t.valueOf=="function"?t.valueOf():t;
        t=u(e)?e+"":e}if(typeof t!="string")return 0===t?t:+t;t=t.replace(g,"");var n=v.test(t);return n||O.test(t)?h(t.slice(2),n?2:8):j.test(t)?s:+t}var l,p="4.17.5",b="Expected a function",s=NaN,y="[object Null]",m="[object Symbol]",d="[object Undefined]",g=/^\s+|\s+$/g,j=/^[-+]0x[0-9a-f]+$/i,v=/^0b[01]+$/i,O=/^0o[0-7]+$/i,h=parseInt,x=typeof global=="object"&&global&&global.Object===Object&&global,T=typeof self=="object"&&self&&self.Object===Object&&self,w=x||T||Function("return this")(),S=typeof exports=="object"&&exports&&!exports.nodeType&&exports,N=S&&typeof module=="object"&&module&&!module.nodeType&&module,E=Object.prototype,$=E.hasOwnProperty,_=E.toString,W=w.Symbol,I=W?W.toStringTag:l,M=Math.max,k=Math.min,D=function(){
        return w.Date.now()};t.debounce=o,t.throttle=i,t.isObject=u,t.isObjectLike=f,t.isSymbol=c,t.now=D,t.toNumber=a,t.VERSION=p,typeof define=="function"&&typeof define.amd=="object"&&define.amd?(w._=t, define(function(){return t})):N?((N.exports=t)._=t,S._=t):w._=t}).call(this);

    var header = document.getElementById("mySide");

    var checkHeader = _.throttle(() => {
        let scrollPosition = Math.round(window.scrollY);

        if (scrollPosition > 10 && scrollPosition < 20) {
            header.classList.add("sticky_10");
        } else if (scrollPosition > 20 && scrollPosition < 30) {
            header.classList.add("sticky_20");
        } else if (scrollPosition > 30 && scrollPosition < 40) {
            header.classList.add("sticky_30");
        } else if (scrollPosition > 40 && scrollPosition < 50) {
            header.classList.add("sticky_40");
        } else if (scrollPosition > 50 && scrollPosition < 60) {
            header.classList.add("sticky_50");
        } else if (scrollPosition > 60 && scrollPosition < 70) {
            header.classList.add("sticky_60");
        } else if (scrollPosition > 70 && scrollPosition < 80) {
            header.classList.add("sticky_70");
        } else if (scrollPosition > 80) {
            header.classList.add("sticky_80");
        } else {
            header.classList.remove("sticky_10");
            header.classList.remove("sticky_20");
            header.classList.remove("sticky_30");
            header.classList.remove("sticky_40");
            header.classList.remove("sticky_50");
            header.classList.remove("sticky_60");
            header.classList.remove("sticky_70");
            header.classList.remove("sticky_80");
        }
    }, 50);

    window.addEventListener('scroll', checkHeader);

</script>

</body>

</html>

