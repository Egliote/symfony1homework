<?php

/* student_info/index.html.twig */
class __TwigTemplate_d2fc292510db73c0586a14e4ea1fe3afc5cb5fa87af6cf15bc8997e0d8463e07 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student_info/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student_info/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table class=\"table table-sm\">
        <tbody>
        <tr>
            <th scope=\"row\">Komanda</th>
            <td>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Mentorius</th>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["mentor"]) || array_key_exists("mentor", $context) ? $context["mentor"] : (function () { throw new Twig_Error_Runtime('Variable "mentor" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th scope=\"row\">Laimingasis (-oji)</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</td>
        </tr>
        <tr class=";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new Twig_Error_Runtime('Variable "format" does not exist.', 18, $this->source); })()), "html", null, true);
        echo ">
            <td>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</td>
            <td></td>
        </tr>

        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 27
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student-list");
        echo "\">Visi dalyviai</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "student_info/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  88 => 26,  74 => 19,  70 => 18,  65 => 16,  58 => 12,  51 => 8,  45 => 4,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <table class=\"table table-sm\">
        <tbody>
        <tr>
            <th scope=\"row\">Komanda</th>
            <td>{{ team }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Mentorius</th>
            <td>{{ mentor }}</td>
        </tr>
        <tr>
            <th scope=\"row\">Laimingasis (-oji)</th>
            <td>{{ student }}</td>
        </tr>
        <tr class={{ format }}>
            <td>{{ message }}</td>
            <td></td>
        </tr>

        </tbody>
    </table>
{% endblock %}
{% block navigation %}
    <a href=\"{{ path('student-list') }}\">Visi dalyviai</a>
{% endblock %}
", "student_info/index.html.twig", "/code/templates/student_info/index.html.twig");
    }
}
