<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php (isset($htmltitle) ? $htmltitle : '') ?></title>
    <base href="<?php echo $base; ?>">
    <link rel="stylesheet" href="<?php echo $base; ?>assets/sass/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Mono&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <ul class="nav_list">
                <li>
                    <a href="<?php echo $base; ?>" class="nav_link">
                        <svg viewBox="0 0 210 90" id="logo">
                            <g fill="#fff" fill-rule="evenodd">
                                <path class="st0"
                                    d="M15.07,24.9a27.61,27.61,0,0,0-2.93,11.34q0,10.31,7.07,12.62a16.33,16.33,0,0,0,4.24.55,17.78,17.78,0,0,0,4.36-.55,26.16,26.16,0,0,0,7.86-3.47q3.48-2.32,4.39-4.45,2.43-5.67,5.24-5.67a1.9,1.9,0,0,1,1.89,1.58,2.5,2.5,0,0,1,.12,1.34,34.74,34.74,0,0,1-2.62,9.42A89,89,0,0,1,39,58.31a56.7,56.7,0,0,1,13.35,1.58c.86.21,1.28.49,1.28.86s-.59.52-1.76.24a51.14,51.14,0,0,0-12.14-1.1H38.17a36.16,36.16,0,0,1-9.91,9.48,40.11,40.11,0,0,1-12,5.64,22.12,22.12,0,0,1-5.49.85A11.46,11.46,0,0,1,7,75.32Q2.51,73.67,2.51,71a4,4,0,0,1,.43-1.71q1.64-3.66,8.65-6.77a42.23,42.23,0,0,1,11.19-3.23,104.27,104.27,0,0,1,13.2-1,51.85,51.85,0,0,0,6.15-15l.25-1a35.69,35.69,0,0,1-6.62,5,32,32,0,0,1-6.43,3,24.58,24.58,0,0,1-7.22,1.4,14.2,14.2,0,0,1-5-.79,11.89,11.89,0,0,1-6.34-5.36A19.06,19.06,0,0,1,8.18,35.33a30.55,30.55,0,0,1,3.11-12.68q-4-4.14-4-8.81A13.14,13.14,0,0,1,11,5c.49-.53.85-.72,1.07-.58s.13.5-.27,1.07a12.24,12.24,0,0,0-2.75,7.37,12.12,12.12,0,0,0,3.17,8,27.19,27.19,0,0,1,1.34-2.38A31.54,31.54,0,0,1,26.53,6.5,26.93,26.93,0,0,1,38.9,3.2a22.67,22.67,0,0,1,3.29.25Q50.07,4.66,52.8,9.91a9.43,9.43,0,0,1,1.1,4.48,10.64,10.64,0,0,1-1.53,5.15Q49,25.45,40.43,27.83a33.73,33.73,0,0,1-9.21,1.28Q21.35,29.11,15.07,24.9ZM5.62,71.41c0,1.14,1,1.91,2.93,2.32a8.84,8.84,0,0,0,2.13.24q4.32,0,11-3.1A32.15,32.15,0,0,0,35,60a85.86,85.86,0,0,0-11.22,1A33.45,33.45,0,0,0,10.56,66C7.26,68.1,5.62,69.91,5.62,71.41ZM40.3,5.09A21.57,21.57,0,0,0,29.21,8.63,34.47,34.47,0,0,0,15.86,23.32a17.62,17.62,0,0,0,6.61,3.11,26.69,26.69,0,0,0,6,.91q12.85,0,19.44-6.89c2.2-2.35,3.29-4.71,3.29-7.07q0-5.6-6.27-7.55A15.3,15.3,0,0,0,40.3,5.09Z" />
                                <path class="st0"
                                    d="M53.84,51.73a3.74,3.74,0,0,0,2.43-1.16C57.78,49.06,59.69,46,62,41.36c.29-.61.57-.79.86-.55a.58.58,0,0,1,.12.4,4.79,4.79,0,0,1-.49,1.34c-.32.71-.62,1.35-.88,1.92s-.78,1.49-1.53,2.78a19.22,19.22,0,0,1-2,3q-2.51,2.86-4.72,2.87a3.69,3.69,0,0,1-3.2-1.34,5,5,0,0,1-1-3,9.79,9.79,0,0,1,.79-3.6l3.91-9.93a3.26,3.26,0,0,0,.12-1,3,3,0,0,0-.73-1.58l3.35-.07c.93,0,1.48.18,1.64.52s0,.89-.36,1.62L53,46.12A9.52,9.52,0,0,0,52,50C52,51.14,52.57,51.73,53.84,51.73Zm6-22.38a2.84,2.84,0,0,1-1.89.74,2,2,0,0,1-1.65-.74,2.2,2.2,0,0,1-.48-1.76,3,3,0,0,1,1-1.77,2.83,2.83,0,0,1,1.89-.73,2.13,2.13,0,0,1,1.68.73,2,2,0,0,1,.45,1.77A2.9,2.9,0,0,1,59.81,29.35Z" />
                                <path class="st0"
                                    d="M80.47,33.07Q73,46.24,73,50.26c0,1.06.38,1.59,1.15,1.59q3.12,0,8.35-10.55c.25-.57.49-.79.74-.67a.55.55,0,0,1,.36.49,1.55,1.55,0,0,1-.24.73c-2.16,4.35-4,7.35-5.46,9s-3,2.47-4.45,2.47a3.82,3.82,0,0,1-3.38-1.71,3.42,3.42,0,0,1-.61-2.16,11.36,11.36,0,0,1,.61-3.32,32.82,32.82,0,0,1,3.35-6.34A3.66,3.66,0,0,0,74.07,38c0-.43-.34-.64-1-.64s-2,.91-4,2.74q-4.38,4-8.47,12.07a1.59,1.59,0,0,1-.82.76,7.44,7.44,0,0,1-1.8.22,4.68,4.68,0,0,0-1.77.3q1-2,3.84-8,5.13-10.66,6.71-12.19a2.72,2.72,0,0,1,2-.74,11.48,11.48,0,0,1,1.25.19,3.9,3.9,0,0,0,1.49.06Q69.26,34,64.14,44.29a48.59,48.59,0,0,1,5.21-5.64A29.69,29.69,0,0,1,75,34.75c2.19-1.2,3.8-1.8,4.81-1.8A1.78,1.78,0,0,1,80.47,33.07Z" />
                                <path class="st0"
                                    d="M141.29,39.35q3.78,0,3.78-1.83c0-.61.21-.92.64-.92s.64.5.64,1.5a2.49,2.49,0,0,1-1.71,2.28,7.29,7.29,0,0,1-3,.79,16,16,0,0,1-2.16-.12,57.93,57.93,0,0,1-15.36-3.9q-4.34,6.83-7.74,18.17a62.57,62.57,0,0,1-3.63,8.84A35.43,35.43,0,0,1,107.67,72a23.27,23.27,0,0,1-6.25,5A33.77,33.77,0,0,1,85,80.8,28.84,28.84,0,0,1,70.64,77,14.85,14.85,0,0,1,63,65.56a29.11,29.11,0,0,1-.12-3.08A20.87,20.87,0,0,1,64,56.66a9.82,9.82,0,0,1,4.48-5.73,4.54,4.54,0,0,1,2-.79c.73,0,1.06.34,1,1a6.45,6.45,0,0,1-1.25,1c-.67.47-1.31,1-1.92,1.46A8.7,8.7,0,0,0,66.5,56a11.61,11.61,0,0,0-1.59,6q0,7.68,5.24,11.83a20.35,20.35,0,0,0,6.28,3.53,20.7,20.7,0,0,0,6.95,1.22h.3q12.63-.3,20.73-9.14,5.11-5.55,14-25a68.11,68.11,0,0,1,3.9-7.87A65.16,65.16,0,0,0,103,33.13q-8.6,0-14,5.18Q84.66,42.45,84.66,47q0,4.94,4.33,6.27a10.13,10.13,0,0,0,2.77.43,10.56,10.56,0,0,0,2.87-.46,7.44,7.44,0,0,0,3.11-1.89A12,12,0,0,0,100,48.49a3.72,3.72,0,0,0,.64-2.13v-.13c.33-.28.61-.37.86-.27s.36.36.36.76A9.12,9.12,0,0,1,97,53.85a9.36,9.36,0,0,1-4.75,1.53,11.74,11.74,0,0,1-3.9-.61A9.43,9.43,0,0,1,82,48a12.07,12.07,0,0,1-.43-3.11,12.9,12.9,0,0,1,2.26-7.13q4-6.21,12.62-7.5a24.36,24.36,0,0,1,3.71-.3c1.18,0,2.56.06,4.12.18a36.32,36.32,0,0,1,6.22,1.22q3.87,1,7.92,2.41t4.85,1.61q3-3.64,4.45-3.71a2,2,0,0,1,.82-.13c.35,0,.62.29.82.86s.06.93-.42,1.09a1.64,1.64,0,0,1-.8-.06c-.24-.16-.74.09-1.49.76A17.43,17.43,0,0,0,125,35.87a87.86,87.86,0,0,0,10.06,2.65A38.27,38.27,0,0,0,141.29,39.35Z" />
                                <path class="st0"
                                    d="M135.86,63.51a25.53,25.53,0,0,0-2.4,5.8,15.67,15.67,0,0,0-.4,3.11c0,.79.31,1.18.91,1.18.78,0,1.73-.71,2.87-2.13a43.09,43.09,0,0,0,4.94-8.11c.16-.36.34-.57.55-.61s.48,0,.48.37a1.93,1.93,0,0,1-.18.73Q137,75.19,133.18,75.19a3.28,3.28,0,0,1-2.86-1.71,4.67,4.67,0,0,1-.55-2.44,14.13,14.13,0,0,1,.61-3.71q-4.87,7.86-8.41,7.86a2.82,2.82,0,0,1-1.77-.61c-1.22-.85-1.83-2.32-1.83-4.39q0-6,5.18-12.13a13.43,13.43,0,0,1,7.19-4.45,8.89,8.89,0,0,1,2.2-.31,6.47,6.47,0,0,1,4.75,2,1.19,1.19,0,0,1,.37,1.28.85.85,0,0,1-1,.48,2.8,2.8,0,0,0-2.92-2.19q-2.62,0-6.46,4.14a33.34,33.34,0,0,0-4.09,5.73c-1.58,2.65-2.38,4.76-2.38,6.34s.51,2.38,1.53,2.38q3.66,0,9.57-11.22a13.66,13.66,0,0,1,1.95-3.07,2.68,2.68,0,0,1,2-.83,9.29,9.29,0,0,1,1.25.19,3.9,3.9,0,0,0,1.49.06A23.59,23.59,0,0,0,135.86,63.51Z" />
                                <path class="st0"
                                    d="M147,73.91a8.67,8.67,0,0,0,1.1.12c1.62,0,3.23-1,4.81-2.86a59.32,59.32,0,0,0,4.57-8,.44.44,0,0,1,.43-.3c.37-.05.55.1.55.42a2.58,2.58,0,0,1-.28.7c-.18.39-.35.78-.51,1.16s-.43,1-.8,1.68-.68,1.32-.94,1.77-.6,1-1,1.64a6.68,6.68,0,0,1-1.22,1.52l-1.28,1.35A5.83,5.83,0,0,1,150,74.58a7.33,7.33,0,0,1-4.39.12,6.35,6.35,0,0,1-2.5.61q-4.34,0-5.24-3.41a8.19,8.19,0,0,1-.19-1.92,3.65,3.65,0,0,1,.76-2.17,2.3,2.3,0,0,1,1.62-1.09q3.1-5.92,5.3-10.67c1.63-3.46,3.52-5.18,5.67-5.18a3.89,3.89,0,0,1,1.68.39c.55.27.75.56.61.89s-.44.38-.89.18a2.92,2.92,0,0,0-1.15-.31,1.94,1.94,0,0,0-.86.19q-2.07,1-2.07,4.2a6.88,6.88,0,0,0,.49,2.81c.32.73.69,1.52,1.09,2.37a13.59,13.59,0,0,1,1.41,5.19,7.17,7.17,0,0,1-1.28,4A11.41,11.41,0,0,1,147,73.91Zm-6.65-2.07a4.62,4.62,0,0,0,.07.79,2.11,2.11,0,0,0,2.25,1.64,2.76,2.76,0,0,0,1.22-.24,5.36,5.36,0,0,1-2.44-4.57A3.32,3.32,0,0,0,140.37,71.84ZM145,73.48c1.78-1.38,2.68-3.61,2.68-6.7a42,42,0,0,0-.43-5.19,44.06,44.06,0,0,1-.43-4.44,13,13,0,0,1,.07-1.59q-4.64,9.27-5.73,11.28c.85,0,1.28.61,1.28,1.83C142.39,71.06,143.24,72.67,145,73.48Z" />
                                <path class="st0"
                                    d="M155.86,70.19q0-5.06,4.87-16.95h-3.17a.38.38,0,0,1-.39-.33,1,1,0,0,1,.06-.67.49.49,0,0,1,.46-.34h3.65q2.21-4.82,4.09-8a14.1,14.1,0,0,1,3.47-4.36,5,5,0,0,1,2.29-1.13,3,3,0,0,1,1,.12,2.76,2.76,0,0,1,1.41,2.78,12.4,12.4,0,0,1-1.41,5.09c-.93,2-1.85,3.84-2.74,5.54h2.93a.39.39,0,0,1,.39.34,1,1,0,0,1-.06.67.48.48,0,0,1-.46.33h-3.53a44.28,44.28,0,0,1-8.11,10.06l-1.4,6.22a7,7,0,0,0-.18,1.55,3.32,3.32,0,0,0,.42,1.56,1.42,1.42,0,0,0,1.34.79,4.71,4.71,0,0,0,2.32-.73q2.92-2.19,6.46-9.21a1.2,1.2,0,0,1,.58-.67c.22-.08.36,0,.4.16a1.67,1.67,0,0,1-.19.88,54.48,54.48,0,0,1-3.17,6q-3.28,5.31-7,5.31a3.94,3.94,0,0,1-3.1-1.4A5.18,5.18,0,0,1,155.86,70.19Zm11.46-16.95h-2.87c-.49,1.14-1.58,3.84-3.29,8.11A46.59,46.59,0,0,0,167.32,53.24Zm.79-1.34q4-7.18,4-10c0-.82-.14-1.22-.42-1.22-.45,0-1.13.65-2.05,2a70.49,70.49,0,0,0-4.6,9.26Z" />
                                <path class="st0"
                                    d="M172,73.73a3.78,3.78,0,0,0,2.44-1.16c1.5-1.51,3.41-4.57,5.73-9.21.28-.61.57-.79.85-.55a.58.58,0,0,1,.12.4,5,5,0,0,1-.48,1.34c-.33.71-.62,1.35-.89,1.92S179,68,178.2,69.25a20,20,0,0,1-2,3q-2.5,2.86-4.73,2.87a3.7,3.7,0,0,1-3.2-1.34,5,5,0,0,1-1-3,9.59,9.59,0,0,1,.79-3.6l3.9-9.93a3.26,3.26,0,0,0,.12-1,2.94,2.94,0,0,0-.73-1.58l3.35-.07c.94,0,1.49.18,1.65.52s0,.89-.37,1.62l-4.87,11.4a9.39,9.39,0,0,0-1,3.84Q170.06,73.73,172,73.73Zm6-22.38a2.84,2.84,0,0,1-1.89.74,2,2,0,0,1-1.64-.74,2.2,2.2,0,0,1-.49-1.76,3,3,0,0,1,1-1.77,2.83,2.83,0,0,1,1.89-.73,2.09,2.09,0,0,1,1.67.73,2,2,0,0,1,.46,1.77A2.91,2.91,0,0,1,177.92,51.35Z" />
                                <path class="st0"
                                    d="M191.39,61.05q2.15-2.56,2.14-4.33T192.06,55q-2.87,0-6.52,5.24a22.32,22.32,0,0,0-2.25,4.33,12.8,12.8,0,0,0-1.1,4.85,6.24,6.24,0,0,0,.88,3.5,3.05,3.05,0,0,0,2.75,1.34,6.94,6.94,0,0,0,3.44-.88,9.91,9.91,0,0,0,3-2.8,34.84,34.84,0,0,0,2.16-3.2c.49-.86,1.16-2.14,2-3.85.29-.56.53-.8.73-.7a.48.48,0,0,1,.31.43,9.65,9.65,0,0,1-.82,2c-.55,1.16-1.1,2.25-1.65,3.26a22.71,22.71,0,0,1-2.35,3.42,9.1,9.1,0,0,1-7.49,3.41q-3.42,0-4.91-1.68a5.59,5.59,0,0,1-1.49-3.87,15.31,15.31,0,0,1,1.31-5.85,26,26,0,0,1,3-5.48q3.54-4.82,8.17-4.82a4.32,4.32,0,0,1,3.26,1.07,3.49,3.49,0,0,1,1,2.47,4.48,4.48,0,0,1-1.71,3.53,2.35,2.35,0,0,1-1.43.79A1.4,1.4,0,0,1,191.39,61.05Z" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="products" class="nav_link">Products</a>
                </li>
                <li>
                    <a href="" class="nav_link">Combination</a>
                </li>
                <li>
                    <a href="" class="nav_link">About Us</a>
                </li>
                <?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true): ?>
                    <li>
                        <a href="login" class="nav_link">Login</a>
                    </li>
                <?php endif; ?>
                <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] === true): ?>
                <li>
                    <a href="admin" class="nav_link">Admin</a>
                </li>
            <?php endif; ?>
                <li>
                    <a href="cart" class="nav_link">
                        <svg id="svg_animation" height="512pt" viewBox="0 -31 512 512" width="512pt"
                            xmlns="http://www.w3.org/2000/svg">
                            <g fill="#fff">
                                <path
                                    d="M164.96 300.004h.024c.02 0 .04-.004.059-.004H437a15.003 15.003 0 0 0 14.422-10.879l60-210a15.003 15.003 0 0 0-2.445-13.152A15.006 15.006 0 0 0 497 60H130.367l-10.722-48.254A15.003 15.003 0 0 0 105 0H15C6.715 0 0 6.715 0 15s6.715 15 15 15h77.969c1.898 8.55 51.312 230.918 54.156 243.71C131.184 280.64 120 296.536 120 315c0 24.812 20.188 45 45 45h272c8.285 0 15-6.715 15-15s-6.715-15-15-15H165c-8.27 0-15-6.73-15-15 0-8.258 6.707-14.977 14.96-14.996zM477.114 90l-51.43 180H177.032l-40-180zm0 0M150 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0M362 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0" />
                            </g>
                        </svg>
                        (<?php echo CartController::cartCount(); ?>)
                    </a>
                </li>
            </ul>
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                <div class="logout">
                    <p>Hallo, <?php echo LoginController::getEmailFromSession(); ?></p>
                    <a href="<?php echo $base; ?>logout" class="nav_link">Logout</a>
                </div>
            <?php endif; ?>
        </nav>
   