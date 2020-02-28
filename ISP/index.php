<?php

interface Employable
{
	public function takeLunchBreak();
}

interface Answerable
{
	public function answerCalls();
}

interface Fixable
{
	public function fixBugs();
}

interface Networkable
{
	public function fixNetworkIssues();
}

class CustomerSerivceAgent implements Employable, Answerable
{
	
	public function takeLunchBreak(){}
	public function answerCalls(){}
}

class Developer implements Employable, Fixable
{
	
	public function takeLunchBreak(){}
	public function fixBugs(){}
}

class NetworkEngineer implements Employable,Networkable
{
	public function takeLunchBreak(){}
	public function fixNetworkIssues(){}}