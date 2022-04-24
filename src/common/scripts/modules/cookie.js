const HALF_YEAR_DURATION = 15552000000;

export function getCookie(cookieName) {
  if (!document.cookie) return;
  
  let name = `${cookieName}=`;
  let cookieArray = [];
  let allCookie = document.cookie.split(';');

  allCookie = allCookie.map((el) => {
    if (el.includes(name)) cookieArray.push(el.trim().replace(name, ''));
  });

  return cookieArray.toString();
}

export function setCookie(cookieName, value, time = HALF_YEAR_DURATION, path = '/') {
  let cookieLifeTime = new Date();
  let newCookieLifeTime = cookieLifeTime.getTime() + time;
  cookieLifeTime.setTime(newCookieLifeTime);

  value = encodeURIComponent(value);

  document.cookie = cookieName + "=" + value + "; expires=" + cookieLifeTime.toGMTString() + "; path=" + path;
}

export function removeCookie(cookieName) {
  window.setCookie(cookieName, '', -1)
}