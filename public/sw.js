self.addEventListener("install", e=>{
    e.waitUntil(
        caches.open("static").then(cache=>{
            return cache.addAll(["./","./css/master.css","./images/icon192.png"]);
        })
    );
});

self.addEventListener("fetch",e =>{
    console.log('Intercepting fetch request for : ${e.request.url}');
});