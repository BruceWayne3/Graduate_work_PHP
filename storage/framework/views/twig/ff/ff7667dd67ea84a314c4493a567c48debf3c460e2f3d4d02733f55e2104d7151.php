<?php

/* layout.html */
class __TwigTemplate_e56662d2c3ab93f545fb491ebe517fe3b71ffe9a39482c47a80c9ef3be74e002 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'init_scripts' => array($this, 'block_init_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">
    <title>Сервис вопросов и ответов</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 8
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), array("css/reset.css?v=1.00"));
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), array("css/style.css?v=1.00"));
        echo "\" rel=\"stylesheet\">

    <script src=\"";
        // line 11
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), array("js/modernizr.js"));
        echo "\"></script>
    <script src=\"";
        // line 12
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), array("js/jquery-2.1.1.js"));
        echo "\"></script>
    <script src=\"";
        // line 13
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), array("js/jquery.mobile.custom.min.js"));
        echo "\"></script>
    <script src=\"";
        // line 14
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), array("js/main.js"));
        echo "\"></script>

    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B\" crossorigin=\"anonymous\">
</head>
<body>

";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('init_scripts', $context, $blocks);
        // line 25
        echo "
</body>
</html>";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
    }

    // line 23
    public function block_init_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  73 => 20,  67 => 25,  65 => 23,  62 => 22,  60 => 20,  51 => 14,  47 => 13,  43 => 12,  39 => 11,  34 => 9,  30 => 8,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">
    <title>Сервис вопросов и ответов</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href=\"{{ asset('css/reset.css?v=1.00') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style.css?v=1.00') }}\" rel=\"stylesheet\">

    <script src=\"{{ asset('js/modernizr.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-2.1.1.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.mobile.custom.min.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>

    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B\" crossorigin=\"anonymous\">
</head>
<body>

{% block content %}
{% endblock content %}

{% block init_scripts %}
{% endblock init_scripts %}

</body>
</html>", "layout.html", "");
    }
}
