<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_173adbd9f7316a252c4b7686d4001314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["version"] = ((twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1 class=\"title\">Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/quick_tour/index.html\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Read the Quick Tour</span>
                    </span>
                </span>
            </a>
        </div>
        ";
        // line 27
        if (($this->getAttribute($this->getContext($context, "app"), "environment") == "dev")) {
            // line 28
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_home"), "html", null, true);
            echo "\" class=\"sf-button sf-button-selected\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Configure</span>
                        </span>
                    </span>
                </a>
            </div>
        ";
        }
        // line 41
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Run The Demo</span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 59
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 60
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 61
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 62
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 63
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 79
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  58 => 17,  474 => 161,  457 => 153,  444 => 149,  423 => 142,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  384 => 121,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  322 => 101,  314 => 99,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  258 => 81,  252 => 80,  247 => 78,  235 => 74,  214 => 69,  140 => 55,  38 => 6,  160 => 61,  135 => 62,  75 => 23,  68 => 14,  26 => 6,  183 => 70,  158 => 79,  151 => 57,  62 => 23,  21 => 2,  78 => 21,  27 => 4,  25 => 5,  72 => 16,  47 => 9,  40 => 8,  145 => 46,  131 => 61,  123 => 59,  120 => 40,  115 => 43,  101 => 43,  83 => 25,  52 => 21,  50 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  173 => 74,  103 => 37,  95 => 34,  80 => 30,  60 => 6,  57 => 11,  48 => 9,  42 => 7,  30 => 3,  242 => 75,  232 => 73,  195 => 66,  190 => 64,  181 => 61,  166 => 71,  163 => 70,  155 => 52,  143 => 56,  126 => 45,  111 => 37,  106 => 45,  91 => 31,  88 => 6,  85 => 32,  73 => 19,  70 => 20,  67 => 15,  55 => 15,  45 => 8,  43 => 6,  37 => 10,  33 => 4,  28 => 3,  24 => 3,  22 => 2,  19 => 1,  1819 => 553,  1813 => 552,  1807 => 551,  1801 => 550,  1795 => 549,  1789 => 548,  1783 => 547,  1777 => 546,  1771 => 545,  1755 => 539,  1748 => 538,  1746 => 537,  1743 => 536,  1720 => 532,  1695 => 531,  1693 => 530,  1690 => 529,  1678 => 524,  1674 => 523,  1671 => 522,  1668 => 521,  1665 => 520,  1662 => 519,  1659 => 518,  1657 => 517,  1654 => 516,  1645 => 509,  1642 => 508,  1640 => 507,  1637 => 506,  1628 => 501,  1625 => 500,  1623 => 499,  1620 => 498,  1603 => 494,  1597 => 492,  1594 => 491,  1576 => 490,  1574 => 489,  1571 => 488,  1563 => 482,  1556 => 480,  1553 => 476,  1549 => 475,  1545 => 473,  1540 => 470,  1538 => 466,  1535 => 465,  1532 => 464,  1530 => 463,  1527 => 462,  1520 => 457,  1513 => 455,  1510 => 451,  1506 => 450,  1503 => 449,  1499 => 447,  1496 => 443,  1493 => 442,  1491 => 441,  1488 => 440,  1480 => 436,  1478 => 435,  1475 => 434,  1468 => 429,  1465 => 428,  1458 => 424,  1453 => 423,  1451 => 422,  1448 => 421,  1439 => 415,  1435 => 414,  1431 => 412,  1429 => 411,  1426 => 410,  1418 => 405,  1413 => 404,  1407 => 402,  1404 => 401,  1402 => 397,  1400 => 396,  1397 => 395,  1388 => 389,  1384 => 388,  1379 => 386,  1368 => 385,  1366 => 384,  1363 => 383,  1356 => 380,  1353 => 379,  1345 => 374,  1341 => 373,  1336 => 372,  1330 => 370,  1324 => 368,  1321 => 367,  1319 => 366,  1316 => 365,  1308 => 361,  1306 => 357,  1304 => 356,  1301 => 355,  1292 => 348,  1276 => 347,  1272 => 345,  1269 => 344,  1266 => 343,  1263 => 342,  1260 => 341,  1257 => 340,  1254 => 339,  1251 => 338,  1248 => 337,  1245 => 336,  1242 => 335,  1239 => 334,  1236 => 333,  1234 => 332,  1231 => 331,  1222 => 327,  1206 => 326,  1202 => 324,  1199 => 323,  1196 => 322,  1193 => 321,  1190 => 320,  1187 => 319,  1184 => 318,  1181 => 317,  1178 => 316,  1175 => 315,  1172 => 314,  1169 => 313,  1166 => 312,  1164 => 311,  1161 => 310,  1140 => 306,  1137 => 305,  1134 => 304,  1131 => 303,  1128 => 302,  1125 => 301,  1122 => 300,  1119 => 299,  1116 => 298,  1113 => 297,  1110 => 296,  1107 => 295,  1104 => 294,  1102 => 293,  1099 => 292,  1091 => 286,  1088 => 285,  1086 => 284,  1083 => 283,  1075 => 279,  1072 => 278,  1070 => 277,  1067 => 276,  1059 => 272,  1056 => 271,  1054 => 270,  1051 => 269,  1043 => 265,  1040 => 264,  1038 => 263,  1035 => 262,  1027 => 258,  1024 => 257,  1021 => 256,  1019 => 255,  1016 => 254,  1008 => 250,  1005 => 249,  1003 => 248,  1000 => 247,  992 => 243,  990 => 242,  987 => 241,  979 => 237,  976 => 236,  974 => 235,  971 => 234,  963 => 230,  960 => 229,  958 => 228,  956 => 227,  953 => 226,  946 => 221,  938 => 220,  933 => 219,  927 => 217,  924 => 216,  922 => 215,  919 => 214,  911 => 208,  909 => 207,  908 => 206,  907 => 205,  906 => 204,  901 => 203,  895 => 201,  892 => 200,  890 => 199,  887 => 198,  878 => 192,  874 => 191,  870 => 190,  866 => 189,  861 => 188,  855 => 186,  852 => 185,  850 => 184,  847 => 183,  831 => 179,  829 => 178,  826 => 177,  810 => 173,  808 => 172,  805 => 171,  788 => 167,  776 => 165,  769 => 162,  767 => 161,  762 => 160,  759 => 159,  741 => 158,  739 => 157,  736 => 156,  727 => 151,  724 => 150,  721 => 149,  715 => 147,  713 => 146,  708 => 145,  705 => 144,  702 => 143,  696 => 141,  694 => 140,  686 => 139,  684 => 138,  681 => 137,  669 => 132,  664 => 131,  661 => 130,  659 => 129,  656 => 128,  647 => 123,  641 => 121,  638 => 120,  636 => 119,  633 => 118,  623 => 114,  621 => 113,  618 => 112,  610 => 108,  607 => 107,  604 => 106,  601 => 105,  599 => 104,  596 => 103,  588 => 98,  583 => 97,  577 => 95,  575 => 94,  570 => 93,  568 => 92,  565 => 91,  558 => 86,  552 => 84,  546 => 82,  544 => 81,  538 => 79,  535 => 78,  533 => 77,  530 => 76,  528 => 75,  525 => 74,  516 => 69,  514 => 68,  511 => 67,  505 => 65,  499 => 63,  497 => 62,  493 => 60,  491 => 59,  488 => 58,  481 => 53,  475 => 51,  469 => 158,  467 => 48,  461 => 155,  458 => 45,  456 => 44,  453 => 151,  447 => 41,  441 => 39,  439 => 38,  435 => 146,  433 => 35,  430 => 144,  412 => 26,  409 => 132,  389 => 21,  374 => 116,  369 => 14,  366 => 13,  357 => 8,  351 => 6,  348 => 5,  346 => 4,  343 => 3,  335 => 551,  333 => 550,  327 => 547,  325 => 546,  323 => 545,  320 => 544,  317 => 542,  315 => 536,  312 => 98,  310 => 529,  305 => 95,  302 => 515,  299 => 513,  297 => 506,  294 => 90,  292 => 498,  289 => 497,  287 => 488,  284 => 487,  282 => 462,  279 => 461,  277 => 440,  274 => 439,  272 => 434,  269 => 433,  266 => 431,  261 => 427,  256 => 420,  254 => 410,  251 => 409,  249 => 395,  246 => 32,  244 => 383,  239 => 379,  234 => 365,  231 => 364,  229 => 73,  226 => 354,  222 => 351,  220 => 70,  217 => 70,  215 => 310,  212 => 309,  210 => 292,  207 => 68,  204 => 289,  202 => 283,  199 => 67,  197 => 276,  194 => 275,  192 => 269,  189 => 71,  187 => 84,  184 => 62,  177 => 65,  172 => 241,  169 => 60,  167 => 234,  164 => 59,  157 => 56,  154 => 54,  152 => 198,  149 => 51,  142 => 59,  139 => 63,  137 => 46,  134 => 170,  132 => 51,  129 => 44,  127 => 60,  124 => 136,  122 => 43,  117 => 44,  114 => 42,  109 => 41,  107 => 36,  104 => 102,  102 => 91,  99 => 30,  97 => 41,  94 => 22,  92 => 33,  87 => 20,  82 => 22,  77 => 3,  482 => 4,  480 => 162,  476 => 2,  465 => 1,  455 => 173,  445 => 171,  440 => 148,  437 => 147,  427 => 143,  424 => 161,  421 => 29,  418 => 28,  416 => 158,  413 => 134,  401 => 155,  395 => 23,  391 => 149,  387 => 122,  383 => 19,  381 => 120,  379 => 119,  377 => 17,  375 => 141,  371 => 15,  367 => 136,  363 => 134,  359 => 132,  356 => 130,  352 => 129,  349 => 126,  347 => 125,  344 => 122,  341 => 105,  339 => 553,  337 => 103,  334 => 114,  331 => 549,  329 => 548,  326 => 109,  324 => 108,  321 => 106,  319 => 105,  316 => 103,  313 => 101,  311 => 100,  309 => 97,  307 => 528,  304 => 96,  300 => 93,  298 => 91,  281 => 89,  264 => 84,  262 => 87,  259 => 421,  257 => 84,  255 => 82,  253 => 81,  250 => 79,  241 => 77,  238 => 73,  236 => 378,  233 => 71,  224 => 71,  219 => 64,  216 => 63,  213 => 62,  211 => 61,  208 => 68,  200 => 55,  196 => 90,  193 => 73,  191 => 52,  188 => 51,  185 => 50,  182 => 66,  179 => 253,  176 => 64,  174 => 246,  171 => 61,  168 => 66,  165 => 64,  162 => 62,  159 => 225,  156 => 58,  153 => 51,  150 => 50,  147 => 58,  144 => 53,  141 => 51,  138 => 57,  136 => 56,  133 => 55,  130 => 41,  128 => 49,  125 => 44,  121 => 46,  119 => 42,  116 => 36,  112 => 42,  110 => 21,  108 => 37,  105 => 40,  98 => 31,  96 => 31,  93 => 28,  89 => 20,  86 => 28,  84 => 28,  81 => 170,  79 => 18,  76 => 28,  74 => 27,  71 => 17,  69 => 25,  66 => 24,  64 => 14,  61 => 13,  59 => 21,  56 => 9,  54 => 10,  51 => 14,  49 => 19,  46 => 7,  44 => 12,  41 => 7,  39 => 9,  36 => 5,  34 => 9,  31 => 5,);
    }
}
