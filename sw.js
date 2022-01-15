 self.addEventListener('install', async function () {
  const cache = await caches.open('static01');
  cache.add('./offline.html')
});

self.addEventListener('activate', event => {
  event.waitUntil(self.clients.claim());
});

self.addEventListener('fetch', event => {
  const request = event.request;
  event.respondWith(networkFirst(request));
});
