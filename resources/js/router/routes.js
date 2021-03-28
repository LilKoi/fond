export default [
  {
    path: "/",
    component: () => import("../components/pages/Main")
  },
  {
    path: "/admin",
    component: () => import("../components/pages/Admin"),
    children: [
      {
        path: "children",
        component: () => import("../components/Children")
      },
      {
        path: "administration",
        component: () => import("../components/Administrators")
      },
      {
        path: "donuts",
        component: () => import("../components/Donuts")
      }
    ]
  }
];
