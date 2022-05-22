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

/* frontend/index.html.twig */
class __TwigTemplate_b2a7c24c0168ee3b7206bae746b963109db1ae025e991c06db4f51d79df88604 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'pageLevelJavascript' => [$this, 'block_pageLevelJavascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "frontend/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

        <div class=\"row margin-top-60\">
            <div class=\"col-md-12 margin-bottom-60\">
                <h2>To Do Planning</h2>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["developers"]) || array_key_exists("developers", $context) ? $context["developers"] : (function () { throw new RuntimeError('Variable "developers" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["developer"]) {
            // line 9
            echo "                <table class=\"table table-bordered\">
                    <thead>
                    <tr class=\"table-primary\">
                        <th>TASK NAME</th>
                        <th>TASK LEVEL</th>
                        <th>DUE DATE (hour)</th>
                        <th>ASSIGNED TO</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 20
                echo "                        ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "developer", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, $context["developer"], "id", [], "any", false, false, false, 20)))) {
                    // line 21
                    echo "                    <tr>
                        <td>";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "toDoList", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "toDoList", [], "any", false, false, false, 23), "level", [], "any", false, false, false, 23), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "estimatedDuration", [], "any", false, false, false, 24), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "developer", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
                    echo "</td>
                    </tr>
                        ";
                }
                // line 28
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "
                    <tr class=\"table-info\">
                        <th scope=\"row\">Total Estimated Duration (hour):</th>
                        <td colspan=\"3\"> ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["developer"], "totalHours", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    </tr>

                    <tr class=\"table-info\">
                        <th scope=\"row\">Total Estimated Duration (weekly):</th>
                        <td colspan=\"3\"> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["developer"], "totalWeek", [], "any", false, false, false, 38), "html", null, true);
            echo " </td>
                    </tr>
                    </tbody>
                </table>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['developer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
    </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_pageLevelJavascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageLevelJavascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageLevelJavascript"));

        // line 50
        echo "




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 50,  166 => 49,  151 => 43,  140 => 38,  132 => 33,  127 => 30,  120 => 28,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  99 => 21,  96 => 20,  92 => 19,  80 => 9,  76 => 8,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}


        <div class=\"row margin-top-60\">
            <div class=\"col-md-12 margin-bottom-60\">
                <h2>To Do Planning</h2>
                {% for developer in developers %}
                <table class=\"table table-bordered\">
                    <thead>
                    <tr class=\"table-primary\">
                        <th>TASK NAME</th>
                        <th>TASK LEVEL</th>
                        <th>DUE DATE (hour)</th>
                        <th>ASSIGNED TO</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for task in tasks %}
                        {% if task.developer.id == developer.id %}
                    <tr>
                        <td>{{ task.toDoList.name }}</td>
                        <td>{{ task.toDoList.level }}</td>
                        <td>{{ task.estimatedDuration }}</td>
                        <td>{{ task.developer.name }}</td>
                    </tr>
                        {% endif %}

                    {% endfor %}

                    <tr class=\"table-info\">
                        <th scope=\"row\">Total Estimated Duration (hour):</th>
                        <td colspan=\"3\"> {{ developer.totalHours }}</td>
                    </tr>

                    <tr class=\"table-info\">
                        <th scope=\"row\">Total Estimated Duration (weekly):</th>
                        <td colspan=\"3\"> {{ developer.totalWeek }} </td>
                    </tr>
                    </tbody>
                </table>
                {% endfor %}

    </div>
    </div>


{% endblock %}
{% block pageLevelJavascript %}





{% endblock %}", "frontend/index.html.twig", "/Users/esma/Desktop/repoGit/to-do-planning/templates/frontend/index.html.twig");
    }
}
