<?php

/* C:\xampp\htdocs\Diplom-PHP\resources\views/index.twig */
class __TwigTemplate_a2b55609df1ca0ead0831af6db04ef3280a9d9e02a6d3ff0a62c2d8aecba6c78 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "C:\\xampp\\htdocs\\Diplom-PHP\\resources\\views/index.twig", 1);
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
        echo "
    <section class=\"cd-faq\">
        <ul class=\"cd-faq-categories\">
            ";
        // line 7
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
            // line 8
            echo "                <li><a class=\"";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " selected ";
            }
            echo " \"
                       href=\"#";
            // line 9
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["category"], "name", array())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></li>
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
        // line 11
        echo "        </ul> <!-- cd-faq-categories -->

        <div class=\"cd-faq-items\">
            <a href=\"";
        // line 14
        echo call_user_func_array($this->env->getFunction('route')->getCallable(), array("add"));
        echo "\" style=\"background: #555b61; color: #ffffff; padding: 10px 15px;\">Добавить</a>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["result"] ?? null));
        foreach ($context['_seq'] as $context["category"] => $context["question"]) {
            // line 16
            echo "
                <ul id=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["category"]), "html", null, true);
            echo "\" class=\"cd-faq-group\">
                    <li class=\"cd-faq-title\"><h2>";
            // line 18
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</h2></li>

                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["question"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 21
                echo "                        <li>
                            <a class=\"cd-faq-trigger\" href=\"\">";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "question", array()), "html", null, true);
                echo "</a>
                            <div class=\"cd-faq-content\">
                                <p>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "answer", array()), "answer", array()), "html", null, true);
                echo "</p>
                            </div> <!-- cd-faq-content -->
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
                </ul> <!-- cd-faq-group -->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div> <!-- cd-faq-items -->
        <a href=\"\" class=\"cd-close-panel\">Close</a>
    </section> <!-- cd-faq -->

";
    }

    // line 37
    public function block_init_scripts($context, array $blocks = array())
    {
        // line 38
        echo "    <script>
    </script>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Diplom-PHP\\resources\\views/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 38,  142 => 37,  134 => 31,  126 => 28,  116 => 24,  111 => 22,  108 => 21,  104 => 20,  99 => 18,  95 => 17,  92 => 16,  88 => 15,  84 => 14,  79 => 11,  61 => 9,  54 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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

    <section class=\"cd-faq\">
        <ul class=\"cd-faq-categories\">
            {% for category in categories %}
                <li><a class=\"{% if loop.first %} selected {% endif %} \"
                       href=\"#{{ category.name | lower }}\">{{ category.name }}</a></li>
            {% endfor %}
        </ul> <!-- cd-faq-categories -->

        <div class=\"cd-faq-items\">
            <a href=\"{{ route('add') }}\" style=\"background: #555b61; color: #ffffff; padding: 10px 15px;\">Добавить</a>
            {% for category, question in result %}

                <ul id=\"{{ category | lower }}\" class=\"cd-faq-group\">
                    <li class=\"cd-faq-title\"><h2>{{ category }}</h2></li>

                    {% for item in question %}
                        <li>
                            <a class=\"cd-faq-trigger\" href=\"\">{{ item.question }}</a>
                            <div class=\"cd-faq-content\">
                                <p>{{ item.answer.answer }}</p>
                            </div> <!-- cd-faq-content -->
                        </li>
                    {% endfor %}

                </ul> <!-- cd-faq-group -->
            {% endfor %}
        </div> <!-- cd-faq-items -->
        <a href=\"\" class=\"cd-close-panel\">Close</a>
    </section> <!-- cd-faq -->

{% endblock content %}

{% block init_scripts %}
    <script>
    </script>
{% endblock init_scripts %}", "C:\\xampp\\htdocs\\Diplom-PHP\\resources\\views/index.twig", "");
    }
}
