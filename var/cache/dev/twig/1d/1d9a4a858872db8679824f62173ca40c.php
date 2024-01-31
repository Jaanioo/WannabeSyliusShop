<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SyliusAdmin/Promotion/Grid/Field/usage.html.twig */
class __TwigTemplate_9cf2a88cb8cd346cd3c44b6b39c72bd3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Promotion/Grid/Field/usage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Promotion/Grid/Field/usage.html.twig"));

        // line 1
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "usageLimit", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <span class=\"ui label\">
        ";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "used", [], "any", false, false, false, 3), "html", null, true);
            echo "
    </span>
    /
    <span class=\"ui label\">∞</span>
";
        } else {
            // line 8
            echo "    ";
            $context["color"] = "teal";
            // line 9
            echo "
    ";
            // line 10
            if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "used", [], "any", false, false, false, 10) == twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "usageLimit", [], "any", false, false, false, 10))) {
                // line 11
                echo "        ";
                $context["color"] = "red";
                // line 12
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "used", [], "any", false, false, false, 12) > (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "usageLimit", [], "any", false, false, false, 12) / 2))) {
                // line 13
                echo "        ";
                $context["color"] = "yellow";
                // line 14
                echo "    ";
            }
            // line 15
            echo "    <span class=\"ui ";
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 15, $this->source); })()), "html", null, true);
            echo " label\">
        ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "used", [], "any", false, false, false, 16), "html", null, true);
            echo "
    </span>
    /
    <span class=\"ui ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 19, $this->source); })()), "html", null, true);
            echo " label\">
        ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "usageLimit", [], "any", false, false, false, 20), "html", null, true);
            echo "
    </span>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/Promotion/Grid/Field/usage.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  91 => 20,  87 => 19,  81 => 16,  76 => 15,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  62 => 10,  59 => 9,  56 => 8,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if data.usageLimit is empty %}
    <span class=\"ui label\">
        {{ data.used }}
    </span>
    /
    <span class=\"ui label\">∞</span>
{% else %}
    {% set color = 'teal' %}

    {% if data.used == data.usageLimit %}
        {% set color = 'red' %}
    {% elseif data.used > data.usageLimit/2 %}
        {% set color = 'yellow' %}
    {% endif %}
    <span class=\"ui {{ color }} label\">
        {{ data.used }}
    </span>
    /
    <span class=\"ui {{ color }} label\">
        {{ data.usageLimit }}
    </span>
{% endif %}
", "@SyliusAdmin/Promotion/Grid/Field/usage.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Promotion/Grid/Field/usage.html.twig");
    }
}