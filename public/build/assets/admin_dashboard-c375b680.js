import{S as j,i as B,s as I,L as T,e as f,B as w,C as D,f as v,g as s,w as O,D as N,E as y,m as b,R,K as $}from"./main-4a2817af.js";function C(n,e,r){const i=n.slice();return i[3]=e[r],i}function H(n){let e,r,i=n[3].id+"",c,m,u,d=n[3].name+"",k,_,M,p=n[3].email+"",A,g,E,L=n[3].age+"",h,l;return{c(){e=f("tr"),r=f("td"),c=D(i),m=w(),u=f("td"),k=D(d),_=w(),M=f("td"),A=D(p),g=w(),E=f("td"),h=D(L),l=w()},m(t,o){v(t,e,o),s(e,r),s(r,c),s(e,m),s(e,u),s(u,k),s(e,_),s(e,M),s(M,A),s(e,g),s(e,E),s(E,h),s(e,l)},p(t,o){o&1&&i!==(i=t[3].id+"")&&N(c,i),o&1&&d!==(d=t[3].name+"")&&N(k,d),o&1&&p!==(p=t[3].email+"")&&N(A,p),o&1&&L!==(L=t[3].age+"")&&N(h,L)},d(t){t&&b(e)}}}function q(n){let e,r,i,c,m,u,d,k,_,M,p,A,g,E,L,h=T(n[0]),l=[];for(let t=0;t<h.length;t+=1)l[t]=H(C(n,h,t));return{c(){e=f("div"),e.innerHTML="<h2>ADMIN DASHBOARD</h2>",r=w(),i=f("div"),c=f("table"),m=f("thead"),m.innerHTML="<tr><th>S/N</th> <th>NAME</th> <th>EMAIL</th> <th>AGE</th></tr>",u=w(),d=f("tbody");for(let t=0;t<l.length;t+=1)l[t].c();k=w(),_=f("div"),M=D("Total Entries: "),p=D(n[1]),A=w(),g=f("button"),g.textContent="Logout"},m(t,o){v(t,e,o),v(t,r,o),v(t,i,o),s(i,c),s(c,m),s(c,u),s(c,d);for(let a=0;a<l.length;a+=1)l[a]&&l[a].m(d,null);v(t,k,o),v(t,_,o),s(_,M),s(_,p),v(t,A,o),v(t,g,o),E||(L=O(g,"click",F),E=!0)},p(t,[o]){if(o&1){h=T(t[0]);let a;for(a=0;a<h.length;a+=1){const S=C(t,h,a);l[a]?l[a].p(S,o):(l[a]=H(S),l[a].c(),l[a].m(d,null))}for(;a<l.length;a+=1)l[a].d(1);l.length=h.length}o&2&&N(p,t[1])},i:y,o:y,d(t){t&&(b(e),b(r),b(i),b(k),b(_),b(A),b(g)),R(l,t),E=!1,L()}}}async function F(){try{const n=await fetch("/api/admin/logout",{method:"POST"});if(n.ok){const e=await n.json();console.log(e),e.message==="success"&&(window.location.href="/admin/login")}else console.error("Logout failed")}catch(n){console.error("Network error:",n)}}function G(n,e,r){let i=[],c=0;async function m(){try{const u=await fetch("/api/users");if(u.ok){const d=await u.json();r(0,i=d.users),r(1,c=d.totalEntries)}else console.error("Failed to fetch data")}catch(u){console.error("Network error:",u)}}return $(m),[i,c]}class P extends j{constructor(e){super(),B(this,e,G,q,I,{})}}export{P as default};
