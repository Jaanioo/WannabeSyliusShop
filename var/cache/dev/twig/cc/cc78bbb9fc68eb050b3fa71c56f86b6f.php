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

/* @SyliusUi/_flashes.html.twig */
class __TwigTemplate_7cc6a778891a68aff23f845c77c8b326 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/_flashes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/_flashes.html.twig"));

        // line 1
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [], "any", false, false, false, 1)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [], "any", false, false, false, 1), "started", [], "any", false, false, false, 1))) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(["success", "error", "info", "warning"]);
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 3
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "session", [], "any", false, false, false, 3), "flashbag", [], "any", false, false, false, 3), "get", [$context["type"]], "method", false, false, false, 3));
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 4
                    echo "            ";
                    if (("error" == $context["type"])) {
                        // line 5
                        echo "                ";
                        $context["result"] = "negative";
                        // line 6
                        echo "                ";
                        $context["icon"] = "remove";
                        // line 7
                        echo "            ";
                    }
                    // line 8
                    echo "            ";
                    if (("info" == $context["type"])) {
                        // line 9
                        echo "                ";
                        $context["result"] = "info";
                        // line 10
                        echo "                ";
                        $context["icon"] = "info";
                        // line 11
                        echo "            ";
                    }
                    // line 12
                    echo "            <div class=\"ui icon ";
                    echo twig_escape_filter($this->env, ((array_key_exists("result", $context)) ? (_twig_default_filter((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 12, $this->source); })()), "positive")) : ("positive")), "html", null, true);
                    echo " message sylius-flash-message\">
                <i class=\"close icon\"></i>
                <i class=\"";
                    // line 14
                    echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 14, $this->source); })()), "checkmark")) : ("checkmark")), "html", null, true);
                    echo " icon\"></i>
                <div class=\"content\">
                    <div class=\"header\">
                        ";
                    // line 17
                    $context["header"] = ("sylius.ui." . $context["type"]);
                    // line 18
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 18, $this->source); })())), "html", null, true);
                    echo "
                    </div>
                    <p ";
                    // line 20
                    echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("flash-messages");
                    echo ">
                    ";
                    // line 21
                    if (is_iterable($context["flash"])) {
                        // line 22
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["flash"], "message", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, $context["flash"], "parameters", [], "any", false, false, false, 22), "flashes"), "html", null, true);
                        echo "
                    ";
                    } else {
                        // line 24
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["flash"], [], "flashes"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 26
                    echo "                    </p>
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusUi/_flashes.html.twig";
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
        return array (  126 => 30,  117 => 26,  111 => 24,  105 => 22,  103 => 21,  99 => 20,  93 => 18,  91 => 17,  85 => 14,  79 => 12,  76 => 11,  73 => 10,  70 => 9,  67 => 8,  64 => 7,  61 => 6,  58 => 5,  55 => 4,  50 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.session is not null and app.session.started %}
    {% for type in ['success', 'error', 'info', 'warning'] %}
        {% for flash in app.session.flashbag.get(type) %}
            {% if 'error' == type %}
                {% set result = 'negative' %}
                {% set icon = 'remove' %}
            {% endif %}
            {% if 'info' == type %}
                {% set result = 'info' %}
                {% set icon = 'info' %}
            {% endif %}
            <div class=\"ui icon {{ result|default('positive') }} message sylius-flash-message\">
                <i class=\"close icon\"></i>
                <i class=\"{{ icon|default('checkmark') }} icon\"></i>
                <div class=\"content\">
                    <div class=\"header\">
                        {% set header = 'sylius.ui.'~type %}
                        {{ header|trans }}
                    </div>
                    <p {{ sylius_test_html_attribute('flash-messages') }}>
                    {% if flash is iterable %}
                        {{ flash.message|trans(flash.parameters, 'flashes') }}
                    {% else %}
                        {{ flash|trans({}, 'flashes') }}
                    {% endif %}
                    </p>
                </div>
            </div>
        {% endfor %}
    {% endfor %}
{% endif %}
", "@SyliusUi/_flashes.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/_flashes.html.twig");
    }
}
