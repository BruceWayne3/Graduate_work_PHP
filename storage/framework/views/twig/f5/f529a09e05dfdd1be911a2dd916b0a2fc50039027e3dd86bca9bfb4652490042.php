<?php

/* C:\xampp\htdocs\Diplom-PHP\resources\views/add.twig */
class __TwigTemplate_c3c5cb56aba29f1921d4987f78713d6b4df0b39e18b246d75a1bec9b2158d905 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "C:\\xampp\\htdocs\\Diplom-PHP\\resources\\views/add.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'init_scripts' => array($this, 'block_init_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container-fluid\">
        <div class=\"row d-flex justify-content-center\">

            <div class=\"col-md-4\">

                <p class=\"display-4\">Добавление нового вопроса</p>

                ";
        // line 11
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 12
            echo "                    <div class=\"alert alert-danger\">
                        <ul>
                            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["errors"] ?? null), "all", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 15
                echo "                                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                        </ul>
                    </div>
                ";
        }
        // line 20
        echo "
                <form action=\"";
        // line 21
        echo call_user_func_array($this->env->getFunction('route')->getCallable(), array("add"));
        echo "\" method=\"post\" accept-charset=\"utf-8\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 22
        echo call_user_func_array($this->env->getFunction('csrf_token')->getCallable(), array());
        echo "\">
                    <div class=\"form-group\">
                        <label for=\"inputName\">Имя</label>
                        <input type=\"text\" class=\"form-control\" id=\"inputName\" name=\"inputName\"
                               placeholder=\"Введите имя\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"inputEmail\">E-mail адрес</label>
                        <input type=\"text\" class=\"form-control\" id=\"inputEmail\" name=\"inputEmail\" placeholder=\"Введите email\" >
                    </div>

                    <div class=\"form-group\">
                        <label for=\"inputCategory\">Выберите категорию</label>
                        <select name=\"inputCategory\" id=\"inputCategory\" class=\"form-control\">

                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 39
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\" ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</option>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"textQuestion\">Текст вопроса</label>
                        <textarea class=\"form-control\" rows=\"5\" id=\"textQuestion\" name=\"textQuestion\"></textarea>
                    </div>

                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary\">Добавить</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
";
    }

    // line 60
    public function block_init_scripts($context, array $blocks = array())
    {
        // line 61
        echo "    <script>
    </script>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Diplom-PHP\\resources\\views/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 61,  152 => 60,  131 => 41,  108 => 39,  91 => 38,  72 => 22,  68 => 21,  65 => 20,  60 => 17,  51 => 15,  47 => 14,  43 => 12,  41 => 11,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends('layout.html') %}

{% block content %}
    <div class=\"container-fluid\">
        <div class=\"row d-flex justify-content-center\">

            <div class=\"col-md-4\">

                <p class=\"display-4\">Добавление нового вопроса</p>

                {% if errors |length > 0 %}
                    <div class=\"alert alert-danger\">
                        <ul>
                            {% for error in errors.all() %}
                                <li>{{ error }}</li>
                            {% endfor %}
                        </ul>
                    </div>
                {% endif %}

                <form action=\"{{ route('add') }}\" method=\"post\" accept-charset=\"utf-8\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token() }}\">
                    <div class=\"form-group\">
                        <label for=\"inputName\">Имя</label>
                        <input type=\"text\" class=\"form-control\" id=\"inputName\" name=\"inputName\"
                               placeholder=\"Введите имя\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"inputEmail\">E-mail адрес</label>
                        <input type=\"text\" class=\"form-control\" id=\"inputEmail\" name=\"inputEmail\" placeholder=\"Введите email\" >
                    </div>

                    <div class=\"form-group\">
                        <label for=\"inputCategory\">Выберите категорию</label>
                        <select name=\"inputCategory\" id=\"inputCategory\" class=\"form-control\">

                            {% for category in categories %}
                                <option value=\"{{ category.id }}\" {% if loop.first %} selected {% endif %}>{{ category.name }}</option>
                            {% endfor %}

                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"textQuestion\">Текст вопроса</label>
                        <textarea class=\"form-control\" rows=\"5\" id=\"textQuestion\" name=\"textQuestion\"></textarea>
                    </div>

                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary\">Добавить</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
{% endblock content %}

{% block init_scripts %}
    <script>
    </script>
{% endblock init_scripts %}", "C:\\xampp\\htdocs\\Diplom-PHP\\resources\\views/add.twig", "");
    }
}
