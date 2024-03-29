<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_c1cff3e2e730fe75aaa568f57a58ad75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Web Configurator Bundle";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "</div>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 66,  175 => 65,  118 => 49,  791 => 473,  777 => 470,  773 => 469,  756 => 466,  730 => 461,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  630 => 445,  615 => 440,  606 => 437,  603 => 436,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  500 => 389,  170 => 84,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  293 => 118,  276 => 113,  273 => 112,  271 => 111,  248 => 96,  240 => 92,  221 => 85,  385 => 160,  382 => 159,  376 => 169,  354 => 151,  336 => 145,  330 => 141,  308 => 130,  286 => 119,  270 => 110,  237 => 93,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  206 => 77,  180 => 63,  148 => 46,  332 => 116,  318 => 111,  306 => 107,  303 => 128,  291 => 102,  288 => 116,  265 => 107,  263 => 95,  243 => 93,  161 => 63,  113 => 48,  100 => 39,  65 => 22,  20 => 1,  90 => 42,  53 => 11,  63 => 18,  58 => 13,  474 => 161,  457 => 153,  444 => 149,  423 => 142,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  384 => 121,  368 => 112,  365 => 111,  362 => 161,  360 => 332,  355 => 157,  322 => 138,  314 => 99,  285 => 115,  283 => 100,  278 => 98,  268 => 85,  258 => 94,  252 => 80,  247 => 78,  235 => 89,  214 => 69,  140 => 58,  38 => 5,  160 => 61,  135 => 62,  75 => 22,  68 => 30,  26 => 6,  183 => 70,  158 => 62,  151 => 59,  62 => 27,  21 => 2,  78 => 18,  27 => 3,  25 => 35,  72 => 18,  47 => 9,  40 => 11,  145 => 74,  131 => 45,  123 => 61,  120 => 20,  115 => 43,  101 => 31,  83 => 33,  52 => 12,  50 => 10,  35 => 4,  32 => 5,  29 => 3,  209 => 79,  203 => 78,  173 => 85,  103 => 25,  95 => 34,  80 => 24,  60 => 20,  57 => 16,  48 => 10,  42 => 7,  30 => 3,  242 => 96,  232 => 73,  195 => 71,  190 => 68,  181 => 61,  166 => 56,  163 => 82,  155 => 52,  143 => 43,  126 => 45,  111 => 47,  106 => 51,  91 => 29,  88 => 32,  85 => 26,  73 => 33,  70 => 19,  67 => 24,  55 => 12,  45 => 10,  43 => 12,  37 => 7,  33 => 4,  28 => 3,  24 => 3,  22 => 2,  19 => 1,  1819 => 553,  1813 => 552,  1807 => 551,  1801 => 550,  1795 => 549,  1789 => 548,  1783 => 547,  1777 => 546,  1771 => 545,  1755 => 539,  1748 => 538,  1746 => 537,  1743 => 536,  1720 => 532,  1695 => 531,  1693 => 530,  1690 => 529,  1678 => 524,  1674 => 523,  1671 => 522,  1668 => 521,  1665 => 520,  1662 => 519,  1659 => 518,  1657 => 517,  1654 => 516,  1645 => 509,  1642 => 508,  1640 => 507,  1637 => 506,  1628 => 501,  1625 => 500,  1623 => 499,  1620 => 498,  1603 => 494,  1597 => 492,  1594 => 491,  1576 => 490,  1574 => 489,  1571 => 488,  1563 => 482,  1556 => 480,  1553 => 476,  1549 => 475,  1545 => 473,  1540 => 470,  1538 => 466,  1535 => 465,  1532 => 464,  1530 => 463,  1527 => 462,  1520 => 457,  1513 => 455,  1510 => 451,  1506 => 450,  1503 => 449,  1499 => 447,  1496 => 443,  1493 => 442,  1491 => 441,  1488 => 440,  1480 => 436,  1478 => 435,  1475 => 434,  1468 => 429,  1465 => 428,  1458 => 424,  1453 => 423,  1451 => 422,  1448 => 421,  1439 => 415,  1435 => 414,  1431 => 412,  1429 => 411,  1426 => 410,  1418 => 405,  1413 => 404,  1407 => 402,  1404 => 401,  1402 => 397,  1400 => 396,  1397 => 395,  1388 => 389,  1384 => 388,  1379 => 386,  1368 => 385,  1366 => 384,  1363 => 383,  1356 => 380,  1353 => 379,  1345 => 374,  1341 => 373,  1336 => 372,  1330 => 370,  1324 => 368,  1321 => 367,  1319 => 366,  1316 => 365,  1308 => 361,  1306 => 357,  1304 => 356,  1301 => 355,  1292 => 348,  1276 => 347,  1272 => 345,  1269 => 344,  1266 => 343,  1263 => 342,  1260 => 341,  1257 => 340,  1254 => 339,  1251 => 338,  1248 => 337,  1245 => 336,  1242 => 335,  1239 => 334,  1236 => 333,  1234 => 332,  1231 => 331,  1222 => 327,  1206 => 326,  1202 => 324,  1199 => 323,  1196 => 322,  1193 => 321,  1190 => 320,  1187 => 319,  1184 => 318,  1181 => 317,  1178 => 316,  1175 => 315,  1172 => 314,  1169 => 313,  1166 => 312,  1164 => 311,  1161 => 310,  1140 => 306,  1137 => 305,  1134 => 304,  1131 => 303,  1128 => 302,  1125 => 301,  1122 => 300,  1119 => 299,  1116 => 298,  1113 => 297,  1110 => 296,  1107 => 295,  1104 => 294,  1102 => 293,  1099 => 292,  1091 => 286,  1088 => 285,  1086 => 284,  1083 => 283,  1075 => 279,  1072 => 278,  1070 => 277,  1067 => 276,  1059 => 272,  1056 => 271,  1054 => 270,  1051 => 269,  1043 => 265,  1040 => 264,  1038 => 263,  1035 => 262,  1027 => 258,  1024 => 257,  1021 => 256,  1019 => 255,  1016 => 254,  1008 => 250,  1005 => 249,  1003 => 248,  1000 => 247,  992 => 243,  990 => 242,  987 => 241,  979 => 237,  976 => 236,  974 => 235,  971 => 234,  963 => 230,  960 => 229,  958 => 228,  956 => 227,  953 => 226,  946 => 221,  938 => 220,  933 => 219,  927 => 217,  924 => 216,  922 => 215,  919 => 214,  911 => 208,  909 => 207,  908 => 206,  907 => 205,  906 => 204,  901 => 203,  895 => 201,  892 => 200,  890 => 199,  887 => 198,  878 => 192,  874 => 191,  870 => 190,  866 => 189,  861 => 188,  855 => 186,  852 => 185,  850 => 184,  847 => 183,  831 => 179,  829 => 178,  826 => 177,  810 => 173,  808 => 172,  805 => 171,  788 => 472,  776 => 165,  769 => 467,  767 => 161,  762 => 160,  759 => 159,  741 => 158,  739 => 157,  736 => 156,  727 => 460,  724 => 150,  721 => 149,  715 => 147,  713 => 146,  708 => 458,  705 => 144,  702 => 143,  696 => 141,  694 => 140,  686 => 139,  684 => 138,  681 => 137,  669 => 132,  664 => 131,  661 => 130,  659 => 129,  656 => 128,  647 => 123,  641 => 446,  638 => 120,  636 => 119,  633 => 118,  623 => 114,  621 => 113,  618 => 112,  610 => 438,  607 => 107,  604 => 106,  601 => 435,  599 => 104,  596 => 103,  588 => 98,  583 => 97,  577 => 95,  575 => 94,  570 => 93,  568 => 92,  565 => 91,  558 => 86,  552 => 84,  546 => 82,  544 => 81,  538 => 79,  535 => 78,  533 => 77,  530 => 76,  528 => 75,  525 => 74,  516 => 69,  514 => 68,  511 => 67,  505 => 391,  499 => 63,  497 => 62,  493 => 60,  491 => 59,  488 => 58,  481 => 53,  475 => 51,  469 => 158,  467 => 48,  461 => 155,  458 => 45,  456 => 44,  453 => 151,  447 => 41,  441 => 39,  439 => 38,  435 => 146,  433 => 35,  430 => 144,  412 => 26,  409 => 183,  389 => 21,  374 => 157,  369 => 165,  366 => 13,  357 => 152,  351 => 150,  348 => 153,  346 => 321,  343 => 320,  335 => 551,  333 => 550,  327 => 141,  325 => 546,  323 => 545,  320 => 544,  317 => 135,  315 => 110,  312 => 129,  310 => 529,  305 => 125,  302 => 515,  299 => 278,  297 => 104,  294 => 90,  292 => 121,  289 => 120,  287 => 488,  284 => 118,  282 => 462,  279 => 115,  277 => 114,  274 => 97,  272 => 111,  269 => 433,  266 => 431,  261 => 105,  256 => 420,  254 => 410,  251 => 97,  249 => 100,  246 => 32,  244 => 136,  239 => 379,  234 => 365,  231 => 89,  229 => 87,  226 => 354,  222 => 351,  220 => 70,  217 => 70,  215 => 310,  212 => 79,  210 => 292,  207 => 68,  204 => 76,  202 => 75,  199 => 93,  197 => 276,  194 => 275,  192 => 269,  189 => 71,  187 => 67,  184 => 62,  177 => 64,  172 => 64,  169 => 60,  167 => 234,  164 => 59,  157 => 56,  154 => 60,  152 => 198,  149 => 51,  142 => 59,  139 => 49,  137 => 46,  134 => 54,  132 => 51,  129 => 44,  127 => 28,  124 => 136,  122 => 41,  117 => 39,  114 => 42,  109 => 52,  107 => 27,  104 => 32,  102 => 40,  99 => 31,  97 => 23,  94 => 34,  92 => 43,  87 => 34,  82 => 25,  77 => 25,  482 => 4,  480 => 162,  476 => 2,  465 => 1,  455 => 173,  445 => 171,  440 => 148,  437 => 147,  427 => 143,  424 => 161,  421 => 29,  418 => 28,  416 => 158,  413 => 134,  401 => 155,  395 => 23,  391 => 149,  387 => 122,  383 => 19,  381 => 120,  379 => 119,  377 => 17,  375 => 141,  371 => 15,  367 => 156,  363 => 155,  359 => 153,  356 => 130,  352 => 129,  349 => 149,  347 => 125,  344 => 119,  341 => 149,  339 => 146,  337 => 103,  334 => 145,  331 => 549,  329 => 548,  326 => 109,  324 => 139,  321 => 112,  319 => 105,  316 => 103,  313 => 101,  311 => 131,  309 => 108,  307 => 528,  304 => 96,  300 => 105,  298 => 121,  281 => 89,  264 => 84,  262 => 104,  259 => 103,  257 => 84,  255 => 103,  253 => 81,  250 => 79,  241 => 77,  238 => 73,  236 => 378,  233 => 71,  224 => 81,  219 => 84,  216 => 63,  213 => 62,  211 => 61,  208 => 68,  200 => 55,  196 => 92,  193 => 69,  191 => 67,  188 => 90,  185 => 67,  182 => 87,  179 => 253,  176 => 86,  174 => 59,  171 => 58,  168 => 61,  165 => 83,  162 => 59,  159 => 53,  156 => 58,  153 => 77,  150 => 55,  147 => 75,  144 => 53,  141 => 73,  138 => 57,  136 => 71,  133 => 55,  130 => 46,  128 => 49,  125 => 51,  121 => 50,  119 => 40,  116 => 57,  112 => 36,  110 => 22,  108 => 47,  105 => 34,  98 => 45,  96 => 37,  93 => 38,  89 => 30,  86 => 28,  84 => 40,  81 => 23,  79 => 18,  76 => 31,  74 => 27,  71 => 23,  69 => 17,  66 => 25,  64 => 11,  61 => 17,  59 => 14,  56 => 14,  54 => 19,  51 => 13,  49 => 14,  46 => 13,  44 => 8,  41 => 7,  39 => 6,  36 => 5,  34 => 4,  31 => 3,);
    }
}
